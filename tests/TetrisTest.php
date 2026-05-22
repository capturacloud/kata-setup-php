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

    public function test_left_should_return_o_rotated_left(): void
    {
        self::assertSame(self::O, new Tetris()->left(self::O));
    }

    public function test_right_should_return_o_rotated_right(): void
    {
        self::assertSame(self::O, new Tetris()->right(self::O));
    }
}