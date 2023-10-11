<?php

namespace App\Filament\Resources\ParishpriestResource\Pages;

use App\Filament\Resources\ParishpriestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParishpriests extends ListRecords
{
    protected static string $resource = ParishpriestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
