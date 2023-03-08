<?php

namespace App\Filament\Event\Pages;

use App\Filament\Event\EventResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;
}
