<?php

namespace App\Filament\Resources\BaptizedResource\Pages;

use App\Filament\Resources\BaptizedResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBaptized extends EditRecord
{
    protected static string $resource = BaptizedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
