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

    public function test_given_00n_executes_10n():void
    {
        self::assertEquals(
            Coordinates::fromString('1:0:N'),
            new MoveForward()->execute(Coordinates::fromString('0:0:N'))
        );
    }
}
