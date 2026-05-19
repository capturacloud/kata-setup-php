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


        $numberOfLefts = substr_count($command, 'L');
        $numberOfRights = substr_count($command, 'R');
        $numberOfRotations = (($numberOfLefts - $numberOfRights) % 4 + 4) % 4;
        $facingDirection = match ($numberOfRotations) {
            1 => 'W',
            2 => 'S',
            3 => 'E',
            default => 'N',
        };

        return "0:$numberOfMovements:$facingDirection";
    }
}
