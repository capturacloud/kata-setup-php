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
        return "$this->verticalPosition:$this->horizontalPosition:{$this->facingDirection->value}";
    }

    public function fromString(string $string): self
    {
        return new self(intval($string[0]),(intval($string[2])),CardinalDirections::from($string[4]));
    }
}