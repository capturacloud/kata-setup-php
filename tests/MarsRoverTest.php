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
}
