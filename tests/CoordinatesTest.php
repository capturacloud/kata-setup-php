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

    public function test_toString_coordinates_return_string_10n()
    {
        $coordinates = new Coordinates(1, 0, CardinalDirections::North);
        self::assertSame('1:0:N', $coordinates->toString());
    }

    public function test_toString_coordinates_return_string_01n()
    {
        $coordinates = new Coordinates(0, 1, CardinalDirections::North);
        self::assertSame('0:1:N', $coordinates->toString());
    }

    public function test_toString_coordinates_return_string_00w()
    {
        $coordinates = new Coordinates(0, 0, CardinalDirections::West);
        self::assertSame('0:0:W', $coordinates->toString());
    }

    public function test_fromString_00n_return_coordinates()
    {
        $coordinates = new Coordinates(0, 0, CardinalDirections::North);
        self::assertEquals($coordinates, Coordinates::fromString('0:0:N'));
    }

    public function test_fromString_10n_return_coordinates()
    {
        $coordinates = new Coordinates(1, 0, CardinalDirections::North);
        self::assertEquals($coordinates, Coordinates::fromString('1:0:N'));
    }

    public function test_fromString_01n_return_coordinates()
    {
        $coordinates = new Coordinates(0, 1, CardinalDirections::North);
        self::assertEquals($coordinates, Coordinates::fromString('0:1:N'));
    }

    public function test_fromString_00w_return_coordinates()
    {
        $coordinates = new Coordinates(0, 0, CardinalDirections::West);
        self::assertEquals($coordinates, Coordinates::fromString('0:0:W'));
    }
}
