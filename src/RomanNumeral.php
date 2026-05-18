<?php

declare(strict_types=1);

namespace Kata;

final class RomanNumeral
{
    public function convert(int $input): string
    {
        $result = '';

        if ($input >= 20) {
            $result .= 'XX';
            $input -= 20;
        }

        if ($input >= 10) {
            $result .= 'X';
            $input -= 10;
        }

        if ($input === 4) {
            return $result . 'IV';
        }

        if ($input === 9) {
            return $result . 'IX';
        }

        if ($input >= 5) {
            $result .= 'V';
            $input -= 5;
        }

        for ($i = 0; $i < $input; $i++) {
            $result .= 'I';
        }

        return $result;
    }
}
