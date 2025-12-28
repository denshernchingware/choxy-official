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
                    ->label('Address One')
                    ->required(),
                TextInput::make('address2')
                    ->label('Address Two')
                    ->required(),
                TextInput::make('place1')
                    ->label('Place (One)')
                    ->required(),
                TextInput::make('place2')
                    ->label('Place (Two)')
                    ->required(),
                TextInput::make('cell1')
                    ->label('Phone Number')
                    ->required(),
                TextInput::make('cell2')
                    ->label('Phone Number')
                    ->required(),
                TextInput::make('cell3')
                    ->label('Phone Number')
                    ->required(),
            ]);
    }
}
