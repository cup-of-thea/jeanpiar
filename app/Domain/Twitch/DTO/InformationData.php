<?php

namespace App\Domain\Twitch\DTO;

use App\Domain\Twitch\Board;

class InformationData
{
    public function __construct(
        public string $displayName,
        public string $broadcasterType,
        public string $description,
        public string $profileImageUrl,
        public string $offlineImageUrl,
        public int $viewCount,
    )
    {
    }

    public static function fromBoard(): InformationData
    {
        $information = Board::information('nikiunderscore');

        return new self(
            displayName: $information['display_name'] ?? '',
            broadcasterType: $information['broadcaster_type'] ?? '',
            description: $information['description'] ?? '',
            profileImageUrl: $information['profile_image_url'] ?? '',
            offlineImageUrl: $information['offline_image_url'] ?? '',
            viewCount: $information['view_count'] ?? 0
        );
    }
}
