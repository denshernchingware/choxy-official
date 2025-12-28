<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
          ->components([
            Textarea::make('description')
                ->label('Description')
                ->rows(5)
                ->required(),

             Textarea::make('mission')
                ->label('Mission')
                ->rows(5)
                ->required(),

             Textarea::make('vision')
                ->label('Vision')
                ->rows(5)
                ->required(),

             FileUpload::make('images')
                    ->label('About Photo')
                    ->image()
                    ->downloadable()
                    ->disk('uploads')
                    ->directory('/')
                    ->required()
                    ->helperText('600 x  600 commended'),
            ]);
    }
}