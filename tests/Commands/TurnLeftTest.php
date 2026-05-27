<?php

namespace KataTests\Commands;

use Kata\Commands\TurnLeft;
use Kata\Coordinates;
use PHPUnit\Framework\TestCase;

class TurnLeftTest extends TestCase
{
    public function test_matches_l():void
    {
        self::assertTrue(TurnLeft::match('L'));
    }

    public function test_doesnt_match_m():void
    {
        self::assertFalse(TurnLeft::match('M'));
    }

    public function test_doesnt_match_r():void
    {
        self::assertFalse(TurnLeft::match('R'));
    }

    public function test_given_00n_executes_00w():void
    {
        self::assertEquals(
            Coordinates::fromString('0:0:W'),
            new TurnLeft()->execute(Coordinates::fromString('0:0:N'))
        );
    }

    public function test_given_00w_executes_00s():void
    {
        self::assertEquals(
            Coordinates::fromString('0:0:S'),
            new TurnLeft()->execute(Coordinates::fromString('0:0:W'))
        );
    }

    public function test_given_80s_executes_80e():void
    {
        self::assertEquals(
            Coordinates::fromString('8:0:E'),
            new TurnLeft()->execute(Coordinates::fromString('8:0:S'))
        );
    }
}
