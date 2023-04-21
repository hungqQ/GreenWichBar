<?php

namespace App\Filament\Resources\BartenderResource\Pages;

use App\Filament\Resources\BartenderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBartender extends EditRecord
{
    protected static string $resource = BartenderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
