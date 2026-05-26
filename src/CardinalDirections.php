<?php

namespace Kata;
enum CardinalDirections: string
{
    case North = 'N';
    case South = 'S';
    case West = 'W';
    case East = 'E';

    public function turnRight(): self
    {
        return match ($this) {
            self::North => self::East,
            self::East => self::South,
            self::South => self::West,
            self::West => self::North
        };
    }

    public function turnLeft(): self
    {
        return match ($this) {
            self::North => self::West,
            self::West => self::South,
            self::South => self::East,
            self::East => self::North
        };
    }
}
