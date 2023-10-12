<?php

namespace App\Filament\Resources\BaptizedResource\Pages;

use App\Filament\Resources\BaptizedResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateBaptized extends CreateRecord
{
    protected static string $resource = BaptizedResource::class;

      protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Bautizado Creado')
            ->body('Bautizado creado exitosamente.');
    }
}
