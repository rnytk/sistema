<?php

namespace App\Filament\Resources\ParenttResource\Pages;

use App\Filament\Resources\ParenttResource;
use App\Filament\Resources\ParenttResource\Widgets\ParenttStatsOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParentts extends ListRecords
{
    protected static string $resource = ParenttResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    // protected function getHeaderWidgets(): array
    // {
    //     return[
    //         ParenttStatsOverview::class,
    //     ];
    // }
}
