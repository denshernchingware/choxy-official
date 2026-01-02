<?php

namespace App\Filament\Resources\Receipts\Schemas;

use App\Models\Receipt;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ReceiptForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('receipt_number')
                    ->label('Receipt Number')
                    ->default(fn () => nextReceiptNumber())
                    ->disabled()
                    ->dehydrated()
                    ->required(),

                TextInput::make('student_name')
                    ->label('Student Number')
                    ->required()
                    ->disabled(fn (?Receipt $record) => $record?->is_locked),

                TextInput::make('amount_words')
                    ->label('Amount In Words')
                    ->required()
                    ->disabled(fn (?Receipt $record) => $record?->is_locked),

                DatePicker::make('receipt_date')
                    ->label('Date')
                    ->default(now())
                    ->required()
                    ->disabled(fn (?Receipt $record) => $record?->is_locked),

                TextInput::make('total')
                    ->label('Total Amount')
                    ->required()
                    ->numeric()
                    ->disabled()
                    ->dehydrated()
                    ->numeric()
                    ->default(0.0),

                Repeater::make('items')
                    ->label('Details')
                    ->relationship()
                    ->schema([
                        TextInput::make('description')->required(),
                        TextInput::make('amount')
                            ->numeric()
                            ->reactive()
                            ->required(),
                    ])
                    ->afterStateUpdated(function ($state, callable $set) {
                            $total = collect($state)
                                ->pluck('amount')
                                ->map(fn ($amount) => (float) $amount)
                                ->sum();

                            $set('total', $total);
                    })

                    ->disabled(fn (?Receipt $record) => $record?->is_locked),
                            ]);
                    }
}
