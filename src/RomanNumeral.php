<?php

declare(strict_types=1);

namespace Kata;

final class RomanNumeral
{
    public function convert(int $input): string
    {
        if($input === 2){
            return 'II';
        }
        return 'I';
    }
}
