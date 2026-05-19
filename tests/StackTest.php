<?php

declare(strict_types=1);

namespace KataTests;

use Kata\Stack;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

final class StackTest extends TestCase
{
    #[TEST]
    public function size_should_return_0_on_a_new_stack(): void
    {
        $stack = new Stack();

        self::assertEquals(0, $stack->size());
    }

    #[TEST]
    public function size_should_return_1_when_one_push_realized(): void
    {
        $stack = new Stack();
        $stack->push('hello');

        self::assertEquals(1, $stack->size());
    }

    #[TEST]
    public function peek_should_return_null_on_a_new_stack(): void
    {
        $stack = new Stack();

        self::assertEquals(null, $stack->peek());
    }
}
