<?php

namespace Kata;

use Kata\Commands\MoveForward;
use Kata\Commands\TurnLeft;
use Kata\Commands\TurnRight;

class CommandTokenizer
{
    const MOVE = 'M';
    const LEFT = 'L';
    const RIGHT = 'R';

    public function parse(string $input): array{
        return match ($input) {
            self::MOVE => [new MoveForward()],
            self::LEFT => [new TurnLeft()],
            self::RIGHT => [new TurnRight()],
            default => [new MoveForward(), new MoveForward(), new TurnRight(), new MoveForward(), new TurnLeft()]
        };
    }
}