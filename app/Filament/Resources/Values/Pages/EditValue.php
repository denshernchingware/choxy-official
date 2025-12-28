<?php

namespace App\Filament\Resources\Values\Pages;

use App\Filament\Resources\Values\ValueResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditValue extends EditRecord
{
    protected static string $resource = ValueResource::class;
      protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

    protected function getHeaderActions(): array
    {
        return [
          //  ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
