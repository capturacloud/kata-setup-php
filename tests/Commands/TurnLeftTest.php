<?php

namespace KataTests\Commands;

use Kata\Commands\TurnLeft;
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
}
