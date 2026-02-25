<?php

declare(strict_types=1);

namespace App\Utils;


class DisplayUsernameProfile
{
    public static function formatUsernameProfile(string $username): string
    {
        $nameToUsername = str_replace(' ', '.', $username);
        return $nameToUsername;
    }
}
