<?php

namespace App\Filament\Resources\Emails\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EmailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
         
          ->components([
                TextInput::make('name')
                    ->label('Full Name')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),

                TextInput::make('subject')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255),

                TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->minLength(7)
                    ->maxLength(20),

                TextInput::make('email')
                    ->label('Email Address')
                    ->email()
                    ->required()
                    ->maxLength(255),

                Textarea::make('comment')
                    ->label('Comment')
                    ->required()
                    ->minLength(5)
                    ->rows(4)
                    ->columnSpanFull(),
          ]);


    }
}