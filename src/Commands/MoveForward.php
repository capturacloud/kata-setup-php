<?php

namespace Kata\Commands;

use Kata\CardinalDirections;
use Kata\Coordinates;

class MoveForward implements Command
{

    private const string COMMAND = 'M';

    public static function match(string $command): bool
    {
        return $command === self::COMMAND;
    }

    public function execute(Coordinates $coordinates): Coordinates
    {
        return new Coordinates(CardinalDirections::North, 1, 0);
    }
}