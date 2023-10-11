<?php

namespace App\Filament\Resources\GodparenttResource\Pages;

use App\Filament\Resources\GodparenttResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGodparentts extends ListRecords
{
    protected static string $resource = GodparenttResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
