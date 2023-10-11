<?php

namespace App\Filament\Resources\ParishpriestResource\Pages;

use App\Filament\Resources\ParishpriestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParishpriest extends EditRecord
{
    protected static string $resource = ParishpriestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
