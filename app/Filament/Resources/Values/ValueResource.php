<?php

namespace App\Filament\Resources\Values;

use App\Filament\Resources\Values\Pages\CreateValue;
use App\Filament\Resources\Values\Pages\EditValue;
use App\Filament\Resources\Values\Pages\ListValues;
use App\Filament\Resources\Values\Pages\ViewValue;
use App\Filament\Resources\Values\Schemas\ValueForm;
use App\Filament\Resources\Values\Schemas\ValueInfolist;
use App\Filament\Resources\Values\Tables\ValuesTable;
use App\Models\Value;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ValueResource extends Resource
{
    protected static ?string $model = Value::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedShieldCheck;
     public static function getModelLabel(): string
    {
        return 'Core Values';
    }

    public static function form(Schema $schema): Schema
    {
        return ValueForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ValueInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ValuesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListValues::route('/'),
            'create' => CreateValue::route('/create'),
          //  'view' => ViewValue::route('/{record}'),
            'edit' => EditValue::route('/{record}/edit'),
        ];
    }
}