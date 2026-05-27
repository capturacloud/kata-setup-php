<?php

namespace Kata\Commands;

use Kata\CardinalDirections;
use Kata\Coordinates;

class MoveForward implements Command
{

    private const string COMMAND = 'M';
    const MAP_HEIGHT=10;

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

        $normalizedVerticalPosition = ($verticalPosition + self::MAP_HEIGHT) % self::MAP_HEIGHT;
        return new Coordinates($normalizedVerticalPosition, 0, $coordinates->facingDirection);
    }
}