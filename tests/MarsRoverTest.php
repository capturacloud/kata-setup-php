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

    public function test_R_command_returns_landing_position_facing_east(): void
    {
        self::assertSame('0:0:E', new MarsRover()->execute('R'));
    }

    public function test_double_R_command_returns_landing_position_facing_south(): void
    {
        self::assertSame('0:0:S', new MarsRover()->execute('RR'));
    }

    public function test_triple_R_command_returns_landing_position_facing_west(): void
    {
        self::assertSame('0:0:W', new MarsRover()->execute('RRR'));
    }

    public function test_double_L_and_one_R_command_returns_landing_position_facing_west(): void
    {
        self::assertSame('0:0:W', new MarsRover()->execute('LLR'));
    }

    public function test_LRLLLLRRL_command_returns_landing_position_facing_east(): void
    {
        self::assertSame('0:0:E', new MarsRover()->execute('LRLLLLRRL'));
    }

    public function test_M_command_returns_01N(): void
    {
        self::assertSame('0:1:N', new MarsRover()->execute('M'));
    }

    public function test_MM_command_returns_02N(): void
    {
        self::assertSame('0:2:N', new MarsRover()->execute('MM'));
    }

    public function test_MMM_command_returns_03N(): void
    {
        self::assertSame('0:3:N', new MarsRover()->execute('MMM'));
    }

    public function test_MMMM_command_returns_04N(): void
    {
        self::assertSame('0:4:N', new MarsRover()->execute('MMMM'));
    }

    public function test_MR_command_returns_01E(): void
    {
        self::assertSame('0:1:E', new MarsRover()->execute('MR'));
    }

    public function test_MMMR_command_returns_03E(): void
    {
        self::assertSame('0:3:E', new MarsRover()->execute('MMMR'));
    }

    public function test_RM_command_returns_10E(): void
    {
        self::assertSame('1:0:E', new MarsRover()->execute('RM'));
    }

    public function test_RMM_command_returns_20E(): void
    {
        self::assertSame('2:0:E', new MarsRover()->execute('RMM'));
    }

    public function test_RMMM_command_returns_30E(): void
    {
        self::assertSame('3:0:E', new MarsRover()->execute('RMMM'));
    }

    public function test_RMMRM_command_returns_29S(): void
    {
        self::assertSame('2:9:S', new MarsRover()->execute('RMMRM'));
    }

    public function test_RMMRMLM_command_returns_39E(): void
    {
        self::assertSame('3:9:E', new MarsRover()->execute('RMMRMLM'));
    }

    public function test_RMMRMLMRM_command_returns_38S(): void
    {
        self::assertSame('3:8:S', new MarsRover()->execute('RMMRMLMRM'));
    }

    public function test_MMRMMLM_command_returns_23N(): void
    {
        self::assertSame('2:3:N', new MarsRover()->execute('MMRMMLM'));
    }

    public function test_MMMMMMMMMM_command_returns_00N(): void
    {
        self::assertSame('0:0:N', new MarsRover()->execute('MMMMMMMMMM'));
    }

    public function test_M_command_after_M_command_returns02N(): void
    {
        $marsRover = new MarsRover();
        $marsRover->execute('M');
        self::assertSame('0:2:N', $marsRover->execute('M'));
    }
}
