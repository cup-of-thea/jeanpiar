<?php

namespace App\Filament\Shops\Pages;

use App\Filament\Shops\ShopResource;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListShops extends ListRecords
{
    protected static string $resource = ShopResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}