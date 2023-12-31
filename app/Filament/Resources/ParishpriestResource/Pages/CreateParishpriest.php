<?php

namespace App\Filament\Resources\ParishpriestResource\Pages;

use App\Filament\Resources\ParishpriestResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateParishpriest extends CreateRecord
{
    protected static string $resource = ParishpriestResource::class;

      protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Parroco creado')
            ->body('Parroco creado exitosamente.');
    }
}
