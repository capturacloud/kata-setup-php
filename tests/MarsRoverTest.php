<?php

declare(strict_types=1);

namespace KataTests;

use Kata\MarsRover;
use PHPUnit\Framework\TestCase;

final class MarsRoverTest extends TestCase
{
    public function test_empty_command_returns_landing_position(): void
    {
        self::assertSame('0:0:N', new MarsRover()->execute(''));
    }

    public function test_L_command_returns_landing_position_facing_west(): void
    {
        self::assertSame('0:0:W', new MarsRover()->execute('L'));
    }

    public function test_double_L_command_returns_landing_position_facing_south(): void
    {
        self::assertSame('0:0:S', new MarsRover()->execute('LL'));
    }

    public function test_triple_L_command_returns_landing_position_facing_east(): void
    {
        self::assertSame('0:0:E', new MarsRover()->execute('LLL'));
    }

    public function test_quadruple_L_command_returns_landing_position(): void
    {
        self::assertSame('0:0:N', new MarsRover()->execute('LLLL'));
    }
}
