<?php

namespace App\Filament\Resources\GodparenttResource\Pages;

use App\Filament\Resources\GodparenttResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateGodparentt extends CreateRecord
{
    protected static string $resource = GodparenttResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Padrinos registrado')
            ->body('Los padrinos han sido registrado exitosamente.');
    }

}
