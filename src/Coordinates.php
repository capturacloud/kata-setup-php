<?php

namespace Kata;

class Coordinates
{
    public function __construct(
        public int $verticalPosition,
        public int $horizontalPosition,
        public CardinalDirections $facingDirection,
    ){}

    public function toString(): string
    {
        return "$this->verticalPosition:0:N";
    }
}