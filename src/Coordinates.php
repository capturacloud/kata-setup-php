<?php

namespace Kata;

readonly class Coordinates
{
    const MAP_HEIGHT = 10;
    const MAP_WIDTH = 10;

    public int $verticalPosition;
    public int $horizontalPosition;
    public CardinalDirections $facingDirection;


    public function __construct(
        int $verticalPosition,
        int $horizontalPosition,
        CardinalDirections $facingDirection
    ){
        $this->verticalPosition = ($verticalPosition + self::MAP_HEIGHT) % self::MAP_HEIGHT;
        $this->horizontalPosition = ($horizontalPosition + self::MAP_WIDTH) % self::MAP_WIDTH;
        $this->facingDirection = $facingDirection;
    }

    public function toString(): string
    {
        return "$this->verticalPosition:$this->horizontalPosition:{$this->facingDirection->value}";
    }

    public static function fromString(string $string): self
    {
        list(
            $verticalPosition,
            $horizontalPosition,
            $facingDirection
        ) = explode(':',$string);

        return new self(
            intval($verticalPosition),
            intval($horizontalPosition),
            CardinalDirections::from($facingDirection)
        );
    }
}