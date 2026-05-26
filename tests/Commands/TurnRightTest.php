<?php

namespace KataTests\Commands;

use Kata\Commands\TurnRight;
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
}
