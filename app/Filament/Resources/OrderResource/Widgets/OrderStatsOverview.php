<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Bartender;
use App\Models\Customer;
use App\Models\Drink;
use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class OrderStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Order', Order::all()->count()),
            Card::make('All Customer', Customer::all()->count()),
            Card::make('All Bartender', Bartender::all()->count()),
            Card::make('All Drink', Drink::all()->count()),
        ];
    }
}
