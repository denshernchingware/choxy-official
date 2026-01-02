<?php

namespace App\Filament\Resources\Receipts\Tables;

use App\Models\Receipt;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Barryvdh\DomPDF\Facade\Pdf;

class ReceiptsTable
{
    public static function configure(Table $table): Table
    {
        return $table
          ->defaultSort('created_at', 'desc')
            ->columns([
            TextColumn::make('receipt_number')
        ->label('Receipt No')
        ->searchable()
        ->sortable(), // works correctly with 0001 format

    TextColumn::make('student_name')
        ->label('Student')
        ->searchable(),

    TextColumn::make('receipt_date')
        ->label('Date')
        ->date()
        ->sortable(),

    TextColumn::make('total')
        ->label('Total')
        ->money('USD')   // 👈 better than numeric()
        ->sortable(),

    IconColumn::make('is_locked')
        ->label('Locked')
        ->boolean()
        ->trueIcon('heroicon-o-lock-closed')
        ->falseIcon('heroicon-o-lock-open'),

    TextColumn::make('created_at')
        ->dateTime()
        ->sortable()
        ->toggleable(isToggledHiddenByDefault: true),

    TextColumn::make('updated_at')
        ->dateTime()
        ->sortable()
        ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make()
                 ->visible(fn (Receipt $record) => ! $record->is_locked),
                DeleteAction::make()
                    ->visible(fn (Receipt $record) => ! $record->is_locked),

               Action::make('PDF')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->color('primary')
                   // ->url(fn (Receipt $record) => route('receipt.pdf', $record))
                   ->action(function (Receipt $record) {

                       // 🔒 Lock AFTER download click
                        if (! $record->is_locked) {
                            $record->updateQuietly([
                                'is_locked' => true,
                            ]);
                        }

                        //⬇️ Stream PDF download
                        return response()->streamDownload(
                            fn () => print(
                                Pdf::loadView('receipt.generate-pdf', [
                                    'title'   => 'Receipt Details',
                                    'receipt' => $record,
                                ])
                                ->setPaper('A4', 'portrait')
                                ->output()
                            ),
                            'receipt-' . $record->receipt_number . '.pdf'
                        );
                   }),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
