<?php

namespace App\Domain\Twitch;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Board
{
    public static function information(string $login): array
    {
        return Cache::remember("twitch:information:$login", 3600, function () use ($login) {
            $token = (new Connect())();
            $response = Http::withHeaders([
                'Authorization' => "Bearer $token",
                'Client-Id' => config('services.twitch.client'),
            ])->get('https://api.twitch.tv/helix/users', ['login' => $login]);

            return $response->json('data')[0];
        });

    }

    public static function followers(): int
    {
        return Cache::remember('twitch:followers', 3600, function () {
            $token = (new Connect())();
            $response = Http::withHeaders([
                'Authorization' => "Bearer $token",
                'Client-Id' => config('services.twitch.client'),
            ])
                ->get('https://api.twitch.tv/helix/channels/followers', [
                    'first' => 1,
                    'broadcaster_id' => config('services.twitch.broadcaster'),
                ]);

            return $response->json('total');
        });
    }
}
