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
        return array_map(fn($currentCommand)=>match ($currentCommand) {
            self::MOVE => new MoveForward(),
            self::LEFT => new TurnLeft(),
            self::RIGHT => new TurnRight(),
        }, str_split($input));
    }
}