<?php

namespace KataTests;

use Kata\CardinalDirections;
use Kata\Coordinates;
use PHPUnit\Framework\TestCase;

class CoordinatesTest extends TestCase
{
    public function test_toString_coordinates_return_string_00n()
    {
        $coordinates = new Coordinates(0, 0, CardinalDirections::North);
        self::assertSame('0:0:N', $coordinates->toString());
    }
}
