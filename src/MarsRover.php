<?php

declare(strict_types=1);

namespace Kata;

final class MarsRover
{
    const INITIAL_HORIZONTAL_POSITION=0;
    const INITIAL_VERTICAL_POSITION=0;
    const MAP_WIDTH=10;
    const MAP_HEIGHT=10;
    const AVAILABLE_LEFT_MOVEMENTS=[
        CardinalDirections::North=>CardinalDirections::West,
        CardinalDirections::West=>CardinalDirections::South,
        CardinalDirections::South=>CardinalDirections::East,
        CardinalDirections::East=>CardinalDirections::North,
    ];
    const AVAILABLE_RIGHT_MOVEMENTS=[
        CardinalDirections::North=>CardinalDirections::East,
        CardinalDirections::East=>CardinalDirections::South,
        CardinalDirections::South=>CardinalDirections::West,
        CardinalDirections::West=>CardinalDirections::North,
    ];

    public function execute(string $command): string
    {
        $facingDirection = CardinalDirections::North;
        $verticalPosition = self::INITIAL_VERTICAL_POSITION;
        $horizontalPosition = self::INITIAL_HORIZONTAL_POSITION;

        for($i = 0; $i < strlen($command); $i++) {
            $currentCommand = $command[$i];
            if($currentCommand === 'M') {
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
            }
            if ($currentCommand === 'L') {
                $facingDirection = self::AVAILABLE_LEFT_MOVEMENTS[$facingDirection];
            }
            if ($currentCommand === 'R') {
                $facingDirection = self::AVAILABLE_RIGHT_MOVEMENTS[$facingDirection];
            }
        }

        $normalizedVerticalPosition = ($verticalPosition + self::MAP_HEIGHT) % self::MAP_HEIGHT;
        $normalizedHorizontalPosition = ($horizontalPosition + self::MAP_WIDTH) % self::MAP_WIDTH;

        return "$normalizedHorizontalPosition:$normalizedVerticalPosition:$facingDirection";
    }
}
