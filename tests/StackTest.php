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
    public function size_should_return_null_when_one_push_and_one_pop_realized(): void
    {
        $stack = new Stack();
        $stack->push('hello');
        $stack->pop();

        self::assertEquals(null, $stack->size());
    }

    #[TEST]
    public function peek_should_return_null_on_a_new_stack(): void
    {
        $stack = new Stack();

        self::assertEquals(null, $stack->peek());
    }

    #[TEST]
    public function peek_should_return_last_pushed_element(): void
    {
        $stack = new Stack();
        $stack->push('hello');

        self::assertEquals('hello', $stack->peek());
    }

    #[TEST]
    public function peek_should_return_first_pushed_element_when_two_push_and_one_pop(): void
    {
        $stack = new Stack();
        $stack->push('hello');
        $stack->push('world');
        $stack->pop();

        self::assertEquals('hello', $stack->peek());
    }

    #[TEST]
    public function empty_should_return_true_on_new_stack(): void
    {
        $stack = new Stack();

        self::assertEquals(true, $stack->isEmpty());
    }

    #[TEST]
    public function empty_should_return_false_when_one_push(): void
    {
        $stack = new Stack();
        $stack->push('hello');

        self::assertEquals(false, $stack->isEmpty());
    }

    #[TEST]
    public function empty_should_return_false_when_two_push_one_pop(): void
    {
        $stack = new Stack();
        $stack->push('hello');
        $stack->push('world');
        $stack->pop();

        self::assertEquals(false, $stack->isEmpty());
    }

    #[TEST]
    public function pop_should_return_one_pushed_element(): void
    {
        $stack = new Stack();
        $stack->push('hello');

        self::assertEquals('hello', $stack->pop());
    }

    #[TEST]
    public function pop_should_return_second_pushed_element_when_two_pushes(): void
    {
        $stack = new Stack();
        $stack->push('hello');
        $stack->push('world');

        self::assertEquals('world', $stack->pop());
    }
}
