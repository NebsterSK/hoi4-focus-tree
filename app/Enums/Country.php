<?php

namespace App\Enums;

enum Country: int
{
    case IRELAND = 1;

    public function name(): string
    {
        return match ($this) {
            self::IRELAND => 'Ireland',
            default => 'Unknown',
        };
    }
}