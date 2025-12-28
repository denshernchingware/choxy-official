<?php

namespace App\Filament\Resources\Contacts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('address1')
                    ->label('Address One')
                    ->searchable(),
                TextColumn::make('address2')
                    ->label('Address Two')
                    ->searchable(),
                TextColumn::make('place1')
                    ->label('Place (One)')
                    ->searchable(),
                TextColumn::make('place2')
                    ->label('Address (Two)')
                    ->searchable(),
                TextColumn::make('cell1')
                    ->label('Phone Number')
                    ->searchable(),
                TextColumn::make('cell2')
                    ->label('Phone Number')
                    ->searchable(),
                TextColumn::make('cell3')
                ->label('Phone Number')
                    ->searchable(),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
