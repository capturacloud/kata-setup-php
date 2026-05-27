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
        $verticalPosition = match ($coordinates->facingDirection) {
            CardinalDirections::North => $coordinates->verticalPosition + 1,
            CardinalDirections::South => $coordinates->verticalPosition - 1,
            default => $coordinates->verticalPosition,
        };

        $horizontalPosition = match ($coordinates->facingDirection) {
            CardinalDirections::West => $coordinates->horizontalPosition - 1,
            CardinalDirections::East => $coordinates->horizontalPosition + 1,
            default => $coordinates->horizontalPosition,
        };

        return new Coordinates(
            $verticalPosition,
            $horizontalPosition,
            $coordinates->facingDirection
        );
    }
}