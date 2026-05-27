<?php

namespace Kata;

class Coordinates
{
    public function __construct(
        public CardinalDirections $facingDirection,
        public int $verticalPosition,
        public int $horizontalPosition
    ){}

    public function toString(): string
    {
        return '0:0:N';
    }
}