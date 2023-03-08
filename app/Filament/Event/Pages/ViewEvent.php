<?php

declare(strict_types=1);

namespace App\Filament\Event\Pages;

use App\Filament\Event\EventResource;
use Filament\Resources\Pages\ViewRecord;

class ViewEvent extends ViewRecord
{
    protected static string $resource = EventResource::class;
}
