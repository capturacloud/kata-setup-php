<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RomanNumeral;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class RomanNumeralTest extends TestCase
{
    #[Test]
    public function it_should_return_I_when_1_given(): void
    {
        $roman = new RomanNumeral();

        self::assertEquals('I', $roman->convert(1));
    }

    #[Test]
    public function it_should_return_II_when_2_given(): void
    {
        $roman = new RomanNumeral();

        self::assertEquals('II', $roman->convert(2));
    }

    #[Test]
    public function it_should_return_III_when_3_given(): void
    {
        $roman = new RomanNumeral();

        self::assertEquals('III', $roman->convert(3));
    }

    #[Test]
    public function it_should_return_IV_when_4_given(): void
    {
        $roman = new RomanNumeral();

        self::assertEquals('IV', $roman->convert(4));
    }
}
