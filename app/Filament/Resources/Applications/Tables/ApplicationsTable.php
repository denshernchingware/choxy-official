<?php

namespace App\Filament\Resources\Applications\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;

class ApplicationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('name')
                ->label('Full Name')
                ->searchable()
                ->sortable(),

            TextColumn::make('date_of_birth')
                ->label('Date of Birth')
                ->date('d M Y')
                ->sortable(),

            TextColumn::make('gender')
                ->badge()
                ->colors([
                    'primary' => 'male',
                    'success' => 'female',
                    'gray'    => 'other',
                ]),

            TextColumn::make('guardian_name')
                ->label('Guardian')
                ->searchable(),

            TextColumn::make('phone')
                ->searchable()
                ->copyable()
                ->copyMessage('Phone copied'),

            TextColumn::make('email')
                ->label('Email')
                ->searchable()
                ->copyable()
                ->toggleable(),

            TextColumn::make('address')
                ->limit(25)
                ->searchable(),
             //   ->toggleable(isToggledHiddenByDefault: true),

            TextColumn::make('previous_school')
                ->label('Previous School')
                ->searchable(),
              //  ->toggleable(isToggledHiddenByDefault: true),

            TextColumn::make('results')
                ->label('Results')
                ->limit(30)
                ->wrap(),
               // ->toggleable(isToggledHiddenByDefault: true),

            TextColumn::make('additional_information')
                ->label('Additional Info')
                ->limit(30)
                ->wrap(),
              //  ->toggleable(isToggledHiddenByDefault: true),


            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
                 Action::make('download')
                    ->label('Download')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->color('primary')
                    ->url(fn ($record) => route('applications.download', $record))
                   // ->openUrlInNewTab(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
