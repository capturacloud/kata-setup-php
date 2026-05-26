<?php

declare(strict_types=1);

namespace Kata;

final class MarsRover
{
    const INITIAL_HORIZONTAL_POSITION=0;
    const INITIAL_VERTICAL_POSITION=0;
    const INITIAL_FACING_DIRECTION=CardinalDirections::North;
    const MOVEMENT_COMMAND='M';
    const TURN_LEFT_COMMAND='L';
    const TURN_RIGHT_COMMAND='R';
    const MAP_WIDTH=10;
    const MAP_HEIGHT=10;

    public function execute(string $command): string
    {
        $facingDirection = self::INITIAL_FACING_DIRECTION;
        $verticalPosition = self::INITIAL_VERTICAL_POSITION;
        $horizontalPosition = self::INITIAL_HORIZONTAL_POSITION;

        for($i = 0; $i < strlen($command); $i++) {
            $currentCommand = $command[$i];
            if($currentCommand === self::MOVEMENT_COMMAND) {
                list($verticalPosition, $horizontalPosition) = $this->move($facingDirection, $verticalPosition, $horizontalPosition);
            }
            if ($currentCommand === self::TURN_LEFT_COMMAND) {
                $facingDirection = $facingDirection->turnLeft();
            }
            if ($currentCommand === self::TURN_RIGHT_COMMAND) {
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
