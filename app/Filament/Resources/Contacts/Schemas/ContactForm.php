<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('address1')
                    ->required(),
                TextInput::make('address2')
                    ->required(),
                TextInput::make('place1')
                    ->required(),
                TextInput::make('place2')
                    ->required(),
                TextInput::make('cell1')
                    ->required(),
                TextInput::make('cell2')
                    ->required(),
                TextInput::make('cell3')
                    ->required(),
            ]);
    }
}
