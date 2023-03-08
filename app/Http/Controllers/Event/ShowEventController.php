<?php

declare(strict_types=1);

namespace App\Http\Controllers\Event;

use App\Domain\Event\Models\Event;
use App\Http\Controllers\Controller;

class ShowEventController extends Controller
{
    public function __invoke(Event $event)
    {
        return view('event', compact('event'));
    }
}
