<?php

namespace App\Filament\Resources\Values\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;


class ValueForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Select::make('icon')
                    ->label('Icon')
                    ->required()
                    ->options([
                        'bi-shield-check' => 'Integrity',
                        'bi-award'        => 'Excellence',
                        'bi-heart'        => 'Respect',
                        'bi-people'       => 'Collaboration',
            ])
            ->searchable(),


            ]);
    }
}
