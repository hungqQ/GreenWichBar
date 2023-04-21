<?php

namespace App\Filament\Resources\BartenderResource\Pages;

use App\Filament\Resources\BartenderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBartenders extends ListRecords
{
    protected static string $resource = BartenderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
