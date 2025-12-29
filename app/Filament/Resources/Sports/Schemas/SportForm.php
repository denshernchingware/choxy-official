<?php

namespace App\Filament\Resources\Sports\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SportForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Description')
                    ->required()
                    ->columnSpanFull(),
                    
                FileUpload::make('image')
                    ->label('Sports Photo')
                    ->image()
                    ->required()
                    ->downloadable()
                    ->disk('uploads')
                    ->directory('/')
                    ->helperText('600 x  600 commended'),
            ]);
    }
}
