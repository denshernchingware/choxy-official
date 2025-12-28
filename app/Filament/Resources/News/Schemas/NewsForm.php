<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                ->label('News Headline')
                    ->required(),
                DatePicker::make('date')
                    ->label('Day Published')
                    ->required(),
                Textarea::make('information')
                    ->label('News Details')
                    ->required()
                    ->columnSpanFull(),
               FileUpload::make('image')
                    ->label('Photo')
                    ->image()
                    ->downloadable()
                    ->disk('uploads')
                    ->directory('/')
                    ->required()
                    ->helperText('600 x  600 commended'),
            ]);
    }
}
