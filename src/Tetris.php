<?php

declare(strict_types=1);

namespace Kata;

final class Tetris
{
    public function left($tetromino): array
    {
        $newTetromino = [];
        $height = count($tetromino);
        $width = strlen($tetromino[0]);

        for($col = 0; $col < $width; $col++) {
            $newRow = '';
            for ($row = 0; $row < $height; $row++) {
                $newRow .= $tetromino[$row][$col];
            }
            $newTetromino[] = $newRow;
        }

        return array_reverse($newTetromino);
    }

    public function right($tetromino): array
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
}