<?php

namespace KataTests;

use Kata\Commands\TurnLeft;
use Kata\Commands\TurnRight;
use Kata\CommandTokenizer;
use Kata\Commands\MoveForward;
use PHPUnit\Framework\TestCase;

class CommandTokenizerTest extends TestCase
{
    public function test_given_m_should_return_movement_command():void
    {
        $actual = new CommandTokenizer()->parse('M');
        self::assertCount(1, $actual);
        self::assertInstanceOf(MoveForward::class, $actual[0]);
    }

    public function test_given_l_should_return_turn_left_command():void
    {
        $actual = new CommandTokenizer()->parse('L');
        self::assertCount(1, $actual);
        self::assertInstanceOf(TurnLeft::class, $actual[0]);
    }

    public function test_given_r_should_return_turn_right_command():void
    {
        $actual = new CommandTokenizer()->parse('R');
        self::assertCount(1, $actual);
        self::assertInstanceOf(TurnRight::class, $actual[0]);
    }

    public function test_given_mmrml_should_return_a_list_of_commands():void
    {
        $actual = new CommandTokenizer()->parse('MMRML');
        self::assertCount(5, $actual);
        self::assertInstanceOf(MoveForward::class, $actual[0]);
        self::assertInstanceOf(MoveForward::class, $actual[1]);
        self::assertInstanceOf(TurnRight::class, $actual[2]);
        self::assertInstanceOf(MoveForward::class, $actual[3]);
        self::assertInstanceOf(TurnLeft::class, $actual[4]);
    }
}
