<?php

namespace App\Filament\Resources\Events\Schemas;


use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('icon')
            ->label('Icon (Heroicon name)')
            ->options([
                'bi bi-calendar-event' => 'Event',
                
                ])
            ->placeholder('heroicon-o-calendar')
            ->helperText('Example: heroicon-o-calendar')
            ->required(),

        TextInput::make('title')
            ->label('Title')
            ->placeholder('Enter title')
            ->maxLength(255)
            ->required(),

        DatePicker::make('date')
            ->label('Date')
          ->required(),

        Select::make('category')
            ->label('Category')
            ->options([
                'event' => 'Event',
                'news' => 'News',
                'announcement' => 'Announcement',
            ])
            ->required(),

            ]);

    }
}
