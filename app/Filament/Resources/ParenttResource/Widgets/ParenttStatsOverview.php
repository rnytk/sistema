<?php

namespace App\Filament\Resources\ParenttResource\Widgets;

use App\Models\Baptized;
use App\Models\Certificate;
use App\Models\Godparentt;
use App\Models\Parentt;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ParenttStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
            
        return [
            Stat::make('Total Usuarios', User::all()->count())
            ->description('Registros')
            ->color('success'),
            Stat::make('Registro Padres', Parentt::all()->count())
            ->description('Registros')
            ->color('success'),
            Stat::make('Total Registro Padrinos', Godparentt::all()->count())
            ->description('Registros')
            ->color('success'),
            Stat::make('Total Certificado', Baptized::all()->count())
            ->description('Registros')
            ->color('warning'),
           
        ];
    }
}
