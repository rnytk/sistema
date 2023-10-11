<?php

namespace App\Filament\Resources\BaptizedResource\Pages;

use App\Filament\Resources\BaptizedResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBaptizeds extends ListRecords
{
    protected static string $resource = BaptizedResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
