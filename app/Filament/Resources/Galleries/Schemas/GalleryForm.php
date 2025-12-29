<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category')
                    ->label('Category')
                    ->options([
                        'borehole' => 'Borehole',
                        'solar' => 'Solar Installation',
                        'bushPump' => 'Bush Pump',
                        'irrigation' => 'Irrigation',
                    ])
                    ->required(),

                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->downloadable()
                    ->disk('uploads')
                    ->directory('/')
                    ->helperText('600 x  600 commended'),
            ]);
    }
}