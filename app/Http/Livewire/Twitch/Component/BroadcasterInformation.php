<?php

declare(strict_types=1);

namespace App\Http\Livewire\Twitch\Component;

use App\Domain\Twitch\Board;
use App\Domain\Twitch\DTO\InformationData;
use Illuminate\View\View;
use Livewire\Component;

class BroadcasterInformation extends Component
{
    public function render(): View
    {
        return view('livewire.twitch.broadcaster_information', [
            'information' => InformationData::fromBoard(),
            'followers' => Board::followers(),
        ]);
    }
}
