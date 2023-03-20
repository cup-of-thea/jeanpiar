<?php

declare(strict_types=1);

namespace App\Http\Livewire\Event\Component;

use App\Domain\Event\Models\Event;
use Illuminate\View\View;
use Livewire\Component;

class LastEvents extends Component
{
    public function render(): View
    {
        return view('livewire.event.last_events', [
            'events' => Event::query()
                ->orderBy('end_on', 'DESC')
                ->take(3)
                ->get(),
        ]);
    }
}
