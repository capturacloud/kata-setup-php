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
        $response = [];
        for($i = 0; $i < strlen($input); $i++) {
            $currentCommand = $input[$i];
            $response [] = match ($currentCommand) {
                self::MOVE => new MoveForward(),
                self::LEFT => new TurnLeft(),
                self::RIGHT => new TurnRight(),
            };
        }
        return $response;
    }
}