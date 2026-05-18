<?php

declare(strict_types=1);

namespace Kata;

final class RomanNumeral
{
    public function convert(int $input): string
    {
        $return = '';

        for ($i = 0; $i < $input; $i++) {
            $return .= 'I';
        }

        return $return;
    }
}
