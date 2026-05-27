<?php

namespace KataTests\Commands;

use Kata\Commands\TurnRight;
use Kata\Coordinates;
use PHPUnit\Framework\TestCase;

class TurnRightTest extends TestCase
{
    public function test_matches_r():void
    {
        self::assertTrue(TurnRight::match('R'));
    }

    public function test_doesnt_match_m():void
    {
        self::assertFalse(TurnRight::match('M'));
    }

    public function test_doesnt_match_l():void
    {
        self::assertFalse(TurnRight::match('L'));
    }

    public function test_given_00n_executes_00e():void
    {
        self::assertEquals(
            Coordinates::fromString('0:0:E'),
            new TurnRight()->execute(Coordinates::fromString('0:0:N'))
        );
    }

    public function test_given_00e_executes_00s():void
    {
        self::assertEquals(
            Coordinates::fromString('0:0:S'),
            new TurnRight()->execute(Coordinates::fromString('0:0:E'))
        );
    }

    public function test_given_10s_executes_10w():void
    {
        self::assertEquals(
            Coordinates::fromString('1:0:W'),
            new TurnRight()->execute(Coordinates::fromString('1:0:S'))
        );
    }
}
