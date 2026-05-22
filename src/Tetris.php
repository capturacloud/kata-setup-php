<?php

declare(strict_types=1);

namespace Kata;

final class Tetris
{
    public function left($tetromino): string
    {
        return '<<<STR
                        ##
                        ##
                        STR';
    }

    public function right($tetromino): string
    {
        return '<<<STR
                        ##
                        ##
                        STR';
    }
}