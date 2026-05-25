<?php

declare(strict_types=1);

namespace Kata;

final class Tetris
{
    public function left(Tetromino $tetromino): Tetromino
    {
        $newTetrominoArray = [];
        $height = count($tetromino->getBlocks());
        $width = strlen($tetromino->getBlocks()[0]);

        for($col = 0; $col < $width; $col++) {
            $newRow = '';
            for ($row = 0; $row < $height; $row++) {
                $newRow .= $tetromino->getBlocks()[$row][$col];
            }
            $newTetrominoArray[] = $newRow;
        }
        return $tetromino->setBlocks(array_reverse($newTetrominoArray));
    }

    public function right(Tetromino $tetromino): Tetromino
    {
        $newTetromino = [];
        $height = count($tetromino->getBlocks());
        $width = strlen($tetromino->getBlocks()[0]);

        for($col = 0; $col < $width; $col++) {
            $newRow = '';
            for ($row = 0; $row < $height; $row++) {
                $newRow .= $tetromino->getBlocks()[$row][$col];
            }
            $newTetromino[] = strrev($newRow);
        }

        return $tetromino->setBlocks($newTetromino);
    }
}