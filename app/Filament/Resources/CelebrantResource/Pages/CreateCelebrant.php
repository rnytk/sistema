<?php

namespace App\Filament\Resources\CelebrantResource\Pages;

use App\Filament\Resources\CelebrantResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateCelebrant extends CreateRecord
{
    protected static string $resource = CelebrantResource::class;
      protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Celebrante Creado')
            ->body('Celebrante creado exitosamente.');
    }
}
