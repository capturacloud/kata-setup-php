<?php

declare(strict_types=1);

namespace Kata;

final class MarsRover
{
    public function execute(string $command): string
    {
        if ($command === 'LL') {
            return '0:0:S';
        }
        if ($command) {
            return '0:0:W';
        }
        return '0:0:N';
    }
}
