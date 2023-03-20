<?php

namespace App\Http\Livewire\Shops\Component;

use App\Domain\Shops\Models\Shop;
use Illuminate\View\View;
use Livewire\Component;

class NikiShops extends Component
{
    public function render(): View
    {
        return view('livewire.shops.nikishops', [
            'shops' => Shop::query()
                ->orderBy('updated_at', 'DESC')
                ->take(12)
                ->get(),
        ]);
    }
}