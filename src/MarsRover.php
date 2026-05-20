<?php

declare(strict_types=1);

namespace Kata;

final class MarsRover
{
    public function execute(string $command): string
    {
        $facingDirection = 'N';
        $verticalPosition = 0;
        $horizontalPosition = 0;
        $leftMovements = [
            'N'=>'W',
            'W'=>'S',
            'S'=>'E',
            'E'=>'N',
        ];
        $rightMovements = [
            'N'=>'E',
            'E'=>'S',
            'S'=>'W',
            'W'=>'N',
        ];

        for($i = 0; $i < strlen($command); $i++) {
            $currentCommand = $command[$i];
            if($currentCommand === 'M') {
                $verticalPosition = match ($facingDirection) {
                    'N' => $verticalPosition + 1,
                    'S' => $verticalPosition - 1,
                    default => $verticalPosition,
                };
                $horizontalPosition = match ($facingDirection) {
                    'W' => $horizontalPosition - 1,
                    'E' => $horizontalPosition + 1,
                    default => $horizontalPosition,
                };
            }
            if ($currentCommand === 'L') {
                $facingDirection = $leftMovements[$facingDirection];
            }
            if ($currentCommand === 'R') {
                $facingDirection = $rightMovements[$facingDirection];
            }
        }

        $normalizedVerticalPosition = ($verticalPosition + 10) % 10;
        $normalizedHorizontalPosition = ($horizontalPosition + 10) % 10;

        return "$normalizedHorizontalPosition:$normalizedVerticalPosition:$facingDirection";
    }
}
