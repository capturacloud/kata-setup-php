<?php

declare(strict_types=1);

namespace Kata;

final class MarsRover
{
    public function execute(string $command): string
    {
        return match ($command) {
            'L', 'RRR' => '0:0:W',
            'LL', 'RR' => '0:0:S',
            'LLL', 'R' => '0:0:E',
            default => '0:0:N',
        };
    }
}
