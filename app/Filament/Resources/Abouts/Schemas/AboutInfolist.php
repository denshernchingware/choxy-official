<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AboutInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('description')
                    ->columnSpanFull(),
                TextEntry::make('mission')
                    ->columnSpanFull(),
                TextEntry::make('vision')
                    ->columnSpanFull(),
                TextEntry::make('images')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
