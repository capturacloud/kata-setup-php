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
}
