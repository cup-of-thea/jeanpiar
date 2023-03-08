<?php

declare(strict_types=1);

namespace App\Filament\Event\Pages;

use App\Filament\Event\EventResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEvents extends ListRecords
{
    protected static string $resource = EventResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
