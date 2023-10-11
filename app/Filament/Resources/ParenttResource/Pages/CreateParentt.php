<?php

namespace App\Filament\Resources\ParenttResource\Pages;

use App\Filament\Resources\ParenttResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateParentt extends CreateRecord
{
    protected static string $resource = ParenttResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Padres registrada correctamente';
    }
}
