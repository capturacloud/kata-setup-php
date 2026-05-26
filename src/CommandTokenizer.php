<?php

namespace Kata;

use Kata\Commands\Move;
use Kata\Commands\TurnLeft;
use Kata\Commands\TurnRight;

class CommandTokenizer
{
    const MOVE = 'M';
    const LEFT = 'L';
    const RIGHT = 'R';

    public function parse(string $input): array{
        return match ($input) {
            self::MOVE => [new Move()],
            self::LEFT => [new TurnLeft()],
            self::RIGHT => [new TurnRight()],
        };
    }
}