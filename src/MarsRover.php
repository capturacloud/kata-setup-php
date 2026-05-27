<?php

declare(strict_types=1);

namespace Kata;

use Kata\Commands\MoveForward;
use Kata\Commands\TurnLeft;
use Kata\Commands\TurnRight;

final class MarsRover
{
    const INITIAL_HORIZONTAL_POSITION=0;
    const INITIAL_VERTICAL_POSITION=0;
    const INITIAL_FACING_DIRECTION=CardinalDirections::North;
    const MAP_WIDTH=10;
    const MAP_HEIGHT=10;

    public function execute(string $command): string
    {
        $facingDirection = self::INITIAL_FACING_DIRECTION;
        $verticalPosition = self::INITIAL_VERTICAL_POSITION;
        $horizontalPosition = self::INITIAL_HORIZONTAL_POSITION;
        $commandList = new CommandTokenizer()->parse($command);

        foreach($commandList as $currentCommand) {
            if($currentCommand instanceof MoveForward) {
                list($verticalPosition, $horizontalPosition) = $this->move($facingDirection, $verticalPosition, $horizontalPosition);
            }
            if ($currentCommand instanceof TurnLeft) {
                $facingDirection = $facingDirection->turnLeft();
            }
            if ($currentCommand instanceof TurnRight) {
                $facingDirection = $facingDirection->turnRight();
            }
        }

        $normalizedVerticalPosition = ($verticalPosition + self::MAP_HEIGHT) % self::MAP_HEIGHT;
        $normalizedHorizontalPosition = ($horizontalPosition + self::MAP_WIDTH) % self::MAP_WIDTH;

        return "$normalizedHorizontalPosition:$normalizedVerticalPosition:$facingDirection->value";
    }

    public function move(CardinalDirections $facingDirection, mixed $verticalPosition, mixed $horizontalPosition): array
    {
        $verticalPosition = match ($facingDirection) {
            CardinalDirections::North => $verticalPosition + 1,
            CardinalDirections::South => $verticalPosition - 1,
            default => $verticalPosition,
        };
        $horizontalPosition = match ($facingDirection) {
            CardinalDirections::West => $horizontalPosition - 1,
            CardinalDirections::East => $horizontalPosition + 1,
            default => $horizontalPosition,
        };
        return [$verticalPosition, $horizontalPosition];
    }
}
