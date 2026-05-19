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
        self::assertEquals(0, new Stack()->size());
    }
}
