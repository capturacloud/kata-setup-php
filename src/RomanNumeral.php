<?php

declare(strict_types=1);

namespace Kata;

final class RomanNumeral
{
    public function convert(int $input): string
    {

        $result = '';

        if ($input >= 50) {
            $result .= 'L';
            $input -= 50;
        }

        if ($input >= 40) {
            $result .= 'XL';
            $input -= 40;
        }

        while ($input >= 10) {
            $result .= 'X';
            $input -= 10;
        }

        if ($input === 9) {
            return $result . 'IX';
        }

        if ($input === 4) {
            return $result . 'IV';
        }

        if ($input >= 5) {
            $result .= 'V';
            $input -= 5;
        }

        while ($input >= 1) {
            $result .= 'I';
            $input--;
        }

        return $result;
    }
}
