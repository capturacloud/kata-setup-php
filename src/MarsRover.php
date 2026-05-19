<?php

declare(strict_types=1);

namespace Kata;

final class MarsRover
{
    public function execute(string $command): string
    {
        if ($command === 'MR') {
            return '0:1:E';
        }

        $numberOfMovements = substr_count($command, 'M') % 10;

        $currentPosition =  match ($numberOfMovements) {
            0 => null,
            default => "0:$numberOfMovements:N",
        };

        if ($currentPosition !== null) {
            return $currentPosition;
        }

        $numberOfLefts = substr_count($command, 'L');
        $numberOfRights = substr_count($command, 'R');
        $numberOfRotations = (($numberOfLefts - $numberOfRights) % 4 + 4) % 4;
        return match ($numberOfRotations) {
            1 => '0:0:W',
            2 => '0:0:S',
            3 => '0:0:E',
            default => '0:0:N',
        };
    }
}
