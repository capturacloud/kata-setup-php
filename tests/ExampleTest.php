<?php

declare(strict_types=1);

namespace KataTests;

use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use Kata\Example;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function test_should_work(): void
    {
        self::assertEquals(true, new Example()->method());
    }


}
