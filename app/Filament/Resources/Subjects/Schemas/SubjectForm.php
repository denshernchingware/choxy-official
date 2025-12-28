<?php

namespace App\Filament\Resources\Subjects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;


class SubjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Subject Name')
                    ->required(),
                Select::make('icon')
            ->label('Subject Icon')
            ->required()
            ->options([
                'bi-calculator'      => 'Mathematics',
                'bi-book'            => 'English',
                'bi-diagram-3'       => 'Combined Science',
                'bi-translate'       => 'Shona',
                'bi-bank'            => 'Heritage Studies',
                'bi-clock-history'   => 'History',
                'bi-people'          => 'FRS',
                'bi-globe'           => 'Geography',
                'bi-shop'            => 'Commerce',
                'bi-journal-text'    => 'Accounts',
                'bi-briefcase'       => 'Business Studies',
                'bi-lightning'       => 'Physics',
                'bi-heart-pulse'     => 'Biology',
                'bi-droplet'         => 'Chemistry',
            ])
            ->reactive()
            ->searchable(),


                    ]);
            }
        }
