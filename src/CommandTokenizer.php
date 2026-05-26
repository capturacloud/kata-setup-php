<?php

namespace Kata;

use Kata\Commands\Move;
use Kata\Commands\TurnLeft;

class CommandTokenizer
{
    const MOVE = 'M';
    const LEFT = 'L';
    const RIGHT = 'R';

    public function parse(string $input): array{
        if ($input === self::LEFT) {
            return [new TurnLeft()];
        }
        return [new Move()];
    }
}