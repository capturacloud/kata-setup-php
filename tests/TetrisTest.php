<?php

declare(strict_types=1);

namespace KataTests;

use Kata\Tetris;
use PHPUnit\Framework\TestCase;

final class TetrisTest extends TestCase
{
    private const array O = [
        '##',
        '##'
    ];

    private const array I = [
        '#',
        '#',
        '#',
        '#'
    ];

    private const array T = [
        '###',
        ' # '
    ];

    public function test_left_should_return_o_rotated_left_when_given_o(): void
    {
        self::assertSame(self::O, new Tetris()->left(self::O));
    }

    public function test_left_should_return_i_rotated_left_when_given_i(): void
    {
        self::assertSame(['####'], new Tetris()->left(self::I));
    }

    public function test_left_should_return_t_rotated_left_when_given_t(): void
    {
        self::assertSame([
            '# ',
            '##',
            '# '
        ], new Tetris()->left(self::T));
    }

    public function test_right_should_return_o_rotated_right_when_given_o(): void
    {
        self::assertSame(self::O, new Tetris()->right(self::O));
    }

    public function test_right_should_return_i_rotated_right_when_given_i(): void
    {
        self::assertSame(['####'], new Tetris()->right(self::I));
    }
}