<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Numero de productos', Product::all()->count()),
            Stat::make('Cantidad de categorias', Category::all()->count()),
            // Stat::make('Fecha', now()->isoFormat('H:mm:ss A')),
        ];
    }
}
