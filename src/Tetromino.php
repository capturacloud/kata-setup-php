<?php

namespace Kata;

class Tetromino
{
    private array $blocks;

    public function getBlocks(): array
    {
        return $this->blocks;
    }

    public function setBlocks(array $blocks): self
    {
        $this->blocks = $blocks;
        return $this;
    }

    private function __construct(array $blocks){
        $this->blocks = $blocks;
    }

    public static function newO(): Tetromino
    {
        return new Tetromino([
            '##',
            '##'
        ]);
    }

    public static function newI(): Tetromino
    {
        return new Tetromino([
            '#',
            '#',
            '#',
            '#'
        ]);
    }

    public static function newT(): Tetromino
    {
        return new Tetromino([
            '###',
            ' # '
        ]);
    }

    public static function newJ(): Tetromino
    {
        return new Tetromino([
            '###',
            '  #'
        ]);
    }

    public static function newL(): Tetromino
    {
        return new Tetromino([
            '###',
            '#  '
        ]);
    }

    public static function newS(): Tetromino
    {
        return new Tetromino([
            ' ##',
            '## '
        ]);
    }

    public static function newZ(): Tetromino
    {
        return new Tetromino([
            '## ',
            ' ##'
        ]);
    }


}