<?php

declare(strict_types=1);

namespace KataTests;

use Generator;
use Kata\RomanNumeral;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class RomanNumeralTest extends TestCase
{
    public static function arabicRomanProvider(): Generator {
        yield '1' => [1, 'I'];
        yield '2' => [2, 'II'];
        yield '3' => [3, 'III'];
        yield '4' => [4, 'IV'];
        yield '5' => [5, 'V'];
        yield '6' => [6, 'VI'];
        yield '7' => [7, 'VII'];
        yield '9' => [9, 'IX'];
        yield '10' => [10, 'X'];
        yield '11' => [11, 'XI'];
        yield '14' => [14, 'XIV'];
        yield '17' => [17, 'XVII'];
        yield '19' => [19, 'XIX'];
        yield '20' => [20, 'XX'];
        yield '21' => [21, 'XXI'];
        yield '22' => [22, 'XXII'];
        yield '24' => [24, 'XXIV'];
        yield '29' => [29, 'XXIX'];
        yield '30' => [30, 'XXX'];
        yield '40' => [40, 'XL'];
        yield '47' => [47, 'XLVII'];
        yield '50' => [50, 'L'];
    }

    #[Test]
    #[DataProvider('arabicRomanProvider')]
    public function it_should_convert_from_arabic_to_roman(int $arabic, string $roman): void
    {
        $sut = new RomanNumeral();

        self::assertEquals($roman, $sut->convert($arabic));
    }
}
