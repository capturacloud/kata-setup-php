<?php

namespace Kata\Commands;

use Kata\CardinalDirections;
use Kata\Coordinates;

class TurnLeft implements Command
{

    private const string COMMAND = 'L';

    public static function match(string $command): bool
    {
        return $command === self::COMMAND;
    }

    public function execute(Coordinates $coordinates): Coordinates
    {
        return new Coordinates(
            $coordinates->verticalPosition,
            0,
            $coordinates->facingDirection->turnLeft()
        );
    }
}