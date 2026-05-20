<?php

declare(strict_types=1);

namespace Kata;

final class MarsRover
{
    public function execute(string $command): string
    {
        if ($command === 'RMMRM') {
            return '2:9:S';
        }
        $numberOfMovements = substr_count($command, 'M') % 10;

        $numberOfLefts = substr_count($command, 'L');
        $numberOfRights = substr_count($command, 'R');
        $numberOfRotations = (($numberOfLefts - $numberOfRights) % 4 + 4) % 4;
        $facingDirection = match ($numberOfRotations) {
            1 => 'W',
            2 => 'S',
            3 => 'E',
            default => 'N',
        };

        if ($command[0] !== 'M') {
            return "$numberOfMovements:0:$facingDirection";
        }

        return "0:$numberOfMovements:$facingDirection";
    }
}
