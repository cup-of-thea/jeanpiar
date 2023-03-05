<?php

namespace App\Domain\Twitch;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\UnauthorizedException;
use JetBrains\PhpStorm\NoReturn;

class Connect
{
    public function __invoke(): string
    {
        return Cache::remember('twitch:access', 604800, function () {
            $response = Http::asForm()->post('https://id.twitch.tv/oauth2/token', [
                'client_id' => config('services.twitch.client'),
                'client_secret' => config('services.twitch.secret'),
                'grant_type' => 'client_credentials',
            ]);

            if($response->ok()) {
                return $response->json('access_token');
            }

            throw new UnauthenticatedException();
        });
    }
}
