<?php

namespace KataTests\Commands;

use Kata\Commands\MoveForward;
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
}
