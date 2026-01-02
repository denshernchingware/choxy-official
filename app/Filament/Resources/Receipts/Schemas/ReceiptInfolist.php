<?php

namespace App\Filament\Resources\Receipts\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ReceiptInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('receipt_number'),
                TextEntry::make('student_name'),
                TextEntry::make('receipt_date')
                    ->date(),
                TextEntry::make('amount_words')
                    ->date(),
                TextEntry::make('total')
                    ->numeric(),
                IconEntry::make('is_locked')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
