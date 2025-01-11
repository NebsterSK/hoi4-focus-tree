<?php

namespace App\Enums;

enum Focus: int
{
    case POLITICAL_EFFORT = 1;
    case COLLECTIVIST_ETHOS = 2;
    case LIBERTY_ETHOS = 3;

    public function name(): string
    {
        return match ($this) {
            self::POLITICAL_EFFORT => 'Political Effort',
            self::COLLECTIVIST_ETHOS => 'Collectivist Ethos',
            self::LIBERTY_ETHOS => 'Liberty Ethos',
            default => 'Unknown',
        };
    }
}