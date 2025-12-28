<?php

namespace App\Filament\Resources\Applications\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ApplicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Full Name')
                    ->required(),

                DatePicker::make('date_of_birth')
                    ->label('Date of Birth')
                    ->required(),

                Select::make('gender')
                    ->options([
                        'male'   => 'Male',
                        'female' => 'Female',
                        'other'  => 'Other',
                    ])
                    ->required()
                    ->nullable(),

                TextInput::make('guardian_name')
                    ->label('Guardian Name')
                    ->required(),

                TextInput::make('phone')
                    ->tel()
                    ->required(),

                TextInput::make('email')
                    ->label('Email Address')
                    ->required()
                    ->email(),


                Textarea::make('results')
                    ->label('Results')
                    ->required(),



                TextInput::make('address')
                    ->required(),

                TextInput::make('previous_school')
                    ->label('Previous School')
                    ->required(),


                Textarea::make('additional_information')
                    ->label('Additional Information')
                    ->nullable()
                    ->columnSpanFull(),
                        ]);
    }
}
