<?php

declare(strict_types=1);

namespace WebAndCow\Challenge;

final class Utility
{
    public static function toPascalCase(string $string): string
    {
        return str_replace(' ', '', ucwords(str_replace('_', ' ', strtolower($string))));
    }
}