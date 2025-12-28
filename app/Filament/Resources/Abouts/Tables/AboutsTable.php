<?php

namespace App\Filament\Resources\Abouts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Actions\DeleteAction;
use Filament\Tables;


class AboutsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('created_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                 ImageColumn::make('images')
                ->label('Photo')
                ->disk('uploads')
                ->width(60),

                TextColumn::make('description')
                    ->label('Description')
                    ->limit(25)
                    ->sortable(),

                TextColumn::make('mission')
                    ->label('Mission')
                    ->limit(25)
                    ->sortable(),

                TextColumn::make('vision')
                    ->label('Vision')
                    ->limit(25),
            ])
            ->filters([
                //
            ])
            ->recordActions([ViewAction::make(), EditAction::make(), DeleteAction::make()])
            ->toolbarActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }
}