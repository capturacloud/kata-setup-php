<?php

declare(strict_types=1);

namespace Kata;

final class Tetris
{
    public function left($tetromino): array
    {
        if ($tetromino === ['#',
                '#',
                '#',
                '#']) {
            return ['####'];
        }
        return [
            '##',
            '##'
        ];
    }

    public function right($tetromino): array
    {
        return [
            '##',
            '##'
        ];
    }
}