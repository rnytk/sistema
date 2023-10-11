<?php

namespace App\Filament\Resources\CelebrantResource\Pages;

use App\Filament\Resources\CelebrantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCelebrants extends ListRecords
{
    protected static string $resource = CelebrantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
