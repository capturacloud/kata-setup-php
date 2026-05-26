<?php

namespace KataTests;

use Generator;
use Kata\CardinalDirections;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class CardinalDirectionsTest extends TestCase
{
    public static function turningRightProvider(): Generator
    {
        yield 'North->East' => [CardinalDirections::North, CardinalDirections::East];
        yield 'East->South' => [CardinalDirections::East, CardinalDirections::South];
        yield 'South->West' => [CardinalDirections::South, CardinalDirections::West];
        yield 'West->North' => [CardinalDirections::West, CardinalDirections::North];
    }

    public static function turningLeftProvider(): Generator
    {
        yield 'North->West' => [CardinalDirections::North, CardinalDirections::West];
        yield 'West->South' => [CardinalDirections::West, CardinalDirections::South];
        yield 'South->East' => [CardinalDirections::South, CardinalDirections::East];
        yield 'East->North' => [CardinalDirections::East, CardinalDirections::North];
    }

    #[DataProvider('turningRightProvider')]
    public function test_turning_right(CardinalDirections $given, CardinalDirections $expected): void
    {
        self::assertSame($expected, $given->turnRight());
    }

    #[DataProvider('turningLeftProvider')]
    public function test_turning_left(CardinalDirections $given, CardinalDirections $expected): void
    {
        self::assertSame($expected, $given->turnLeft());
    }
}
