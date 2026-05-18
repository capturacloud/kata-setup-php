<?php

declare(strict_types=1);

namespace Kata;

final class RomanNumeral
{
    public function convert(int $input): string
    {
        if ($input === 4) {
            return 'IV';
        }

        if ($input === 9) {
            return 'IX';
        }

        $result = '';

        if ($input >= 10) {
            $result .= 'X';
            $input -= 10;
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
