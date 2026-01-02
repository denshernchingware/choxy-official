<?php

namespace App\Filament\Resources\News\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\DeleteAction;

class NewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                  ImageColumn::make('image')
                ->label('Photo')
                ->disk('uploads')
                ->square(),

            TextColumn::make('title')
                ->label('News Headline')
                ->searchable()
                ->sortable(),

            TextColumn::make('date')
                ->label('Day Published')
                ->date()
                ->sortable(),

            TextColumn::make('information')
                ->label('News Details')
                ->limit(50)
                ->wrap(),
        ])


            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                 DeleteAction::make(),


            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
