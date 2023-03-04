<?php

namespace App\Domain\Twitch;

use Illuminate\Support\Facades\Http;

class Board
{
    /**
     * @throws UnauthenticatedException
     */
    public static function information(string $login): array
    {
        $token = (new Connect())();
        $response = Http::withHeaders([
            'Authorization' => "Bearer $token",
            'Client-Id' => config('services.twitch.client'),
        ])->get('https://api.twitch.tv/helix/users', ['login' => $login]);

        return $response->json('data')[0];
    }

    /**
     * @throws UnauthenticatedException
     */
    public static function followers(): int
    {
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
    }

    /**
     * @throws UnauthenticatedException
     */
    public static function emotes(): array
    {
        $token = (new Connect())();
        $response = Http::withHeaders([
            'Authorization' => "Bearer $token",
            'Client-Id' => config('services.twitch.client'),
        ])
            ->get('https://api.twitch.tv/helix/chat/emotes', [
                'first' => 1,
                'broadcaster_id' => config('services.twitch.broadcaster'),
            ]);

        return $response->json('data');
    }

    /**
     * @throws UnauthenticatedException
     */
    public static function clips(): array
    {
        $token = (new Connect())();
        $response = Http::withHeaders([
            'Authorization' => "Bearer $token",
            'Client-Id' => config('services.twitch.client'),
        ])
            ->get('https://api.twitch.tv/helix/clips', [
                'broadcaster_id' => config('services.twitch.broadcaster'),
            ]);

        return $response->json('data');
    }

    /**
     * @throws UnauthenticatedException
     */
    public static function schedule(): array
    {
        $token = (new Connect())();
        $response = Http::withHeaders([
            'Authorization' => "Bearer $token",
            'Client-Id' => config('services.twitch.client'),
        ])
            ->get('https://api.twitch.tv/helix/schedule', [
                'broadcaster_id' => config('services.twitch.broadcaster'),
            ]);

        return $response->json('data');
    }
}
