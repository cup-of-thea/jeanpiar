<?php

namespace App\Filament\Event\Pages;

use App\Filament\Event\EventResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEvent extends EditRecord
{
    protected static string $resource = EventResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
