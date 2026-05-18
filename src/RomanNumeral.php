<?php

declare(strict_types=1);

namespace Kata;

final class RomanNumeral
{
    public const array EQUIVALENCES = [
        100 => 'C',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    public function convert(int $input): string
    {
        $result = '';

        foreach (self::EQUIVALENCES as $arabic => $roman) {
            while ($input >= $arabic) {
                $result .= $roman;
                $input -= $arabic;
            }
        }

        return $result;
    }
}
