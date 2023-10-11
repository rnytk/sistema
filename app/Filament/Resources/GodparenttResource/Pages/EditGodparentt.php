<?php

namespace App\Filament\Resources\GodparenttResource\Pages;

use App\Filament\Resources\GodparenttResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGodparentt extends EditRecord
{
    protected static string $resource = GodparenttResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
