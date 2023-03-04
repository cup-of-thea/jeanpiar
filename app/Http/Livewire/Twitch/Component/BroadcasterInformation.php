<?php

namespace App\Http\Livewire\Twitch\Component;

use App\Domain\Twitch\Board;
use App\Domain\Twitch\DTO\InformationData;
use App\Domain\Twitch\UnauthenticatedException;
use Illuminate\View\View;
use Livewire\Component;

class BroadcasterInformation extends Component
{
    /**
     * @throws UnauthenticatedException
     */
    public function render(): View
    {
        return view('livewire.twitch.broadcaster_information', [
            'information' => InformationData::fromBoard(Board::information('nikiunderscore')),
            'followers' => Board::followers(),
        ]);
    }
}
