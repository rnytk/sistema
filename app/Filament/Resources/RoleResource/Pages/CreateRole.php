<?php

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateRole extends CreateRecord
{
    protected static string $resource = RoleResource::class;

     protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

     protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Rol Creado')
            ->body('El rol ha sido registrado exitosamente.');
    }
}
