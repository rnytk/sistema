<?php

namespace App\Filament\Resources\ParenttResource\Pages;

use App\Filament\Resources\ParenttResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParentt extends EditRecord
{
    protected static string $resource = ParenttResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
