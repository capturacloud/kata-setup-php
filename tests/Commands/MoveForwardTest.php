<?php

namespace KataTests\Commands;

use Kata\CardinalDirections;
use Kata\Commands\MoveForward;
use Kata\Coordinates;
use PHPUnit\Framework\TestCase;

class MoveForwardTest extends TestCase
{
    public function test_matches_m():void
    {
        self::assertTrue(MoveForward::match('M'));
    }

    public function test_doesnt_match_l():void
    {
        self::assertFalse(MoveForward::match('L'));
    }

    public function test_doesnt_match_r():void
    {
        self::assertFalse(MoveForward::match('R'));
    }

    public function test_given_00n_executes_01n():void
    {
        $moveForward = new MoveForward();
        $expectedCoordinates = new Coordinates(1, 0, CardinalDirections::North);
        $coordinates = new Coordinates(0, 0, CardinalDirections::North);
        self::assertEquals($expectedCoordinates, $moveForward->execute($coordinates));
    }

    public function test_given_00n_executes_01n2():void
    {
        $moveForward = new MoveForward();
        $expectedCoordinates = new Coordinates(1, 0, CardinalDirections::North);
        $coordinates = new Coordinates(0, 0, CardinalDirections::North);
        self::assertEquals(Coordinates::fromString(''), $moveForward->execute($coordinates));
    }


}
