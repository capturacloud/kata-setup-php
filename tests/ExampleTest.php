<?php

declare(strict_types=1);

namespace KataTests;

use Kata\Example;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function test_should_work(): void
    {
        self::assertTrue(new Example()->method());
    }
}
