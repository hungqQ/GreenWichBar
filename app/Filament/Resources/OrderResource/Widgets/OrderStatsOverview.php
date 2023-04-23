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
            Card::make('All Order', Order::all()->count())
            ->description('amount of order')
            ->descriptionIcon('heroicon-s-shopping-cart'),
            Card::make('All Customer', Customer::all()->count())
            ->description('amount of customer')
            ->descriptionIcon('heroicon-s-user'),
            Card::make('All Bartender', Bartender::all()->count())
            ->description('amount of bartender')
            ->descriptionIcon('heroicon-s-user-group'),
            Card::make('All Drink', Drink::all()->count())
            ->description('amount of drink')
            ->descriptionIcon('heroicon-s-beaker'),
        ];
    }
}
