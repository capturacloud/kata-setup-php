<?php

declare(strict_types=1);

namespace Kata;

use Kata\Commands\MoveForward;
use Kata\Commands\TurnLeft;
use Kata\Commands\TurnRight;

final class MarsRover
{
    const INITIAL_HORIZONTAL_POSITION=0;
    const INITIAL_VERTICAL_POSITION=0;
    const INITIAL_FACING_DIRECTION=CardinalDirections::North;

    public function execute(string $command): string
    {
        $facingDirection = self::INITIAL_FACING_DIRECTION;
        $commandList = new CommandTokenizer()->parse($command);
        $coordinates = new Coordinates(
            self::INITIAL_VERTICAL_POSITION,
            self::INITIAL_HORIZONTAL_POSITION,
            self::INITIAL_FACING_DIRECTION
        );

        foreach($commandList as $currentCommand) {
            if($currentCommand instanceof MoveForward) {
                $coordinates = $currentCommand->execute($coordinates);
            }
            if ($currentCommand instanceof TurnLeft) {
                $coordinates = $currentCommand->execute($coordinates);
            }
            if ($currentCommand instanceof TurnRight) {
                $facingDirection = $facingDirection->turnRight();
            }
        }

        return "$coordinates->horizontalPosition:$coordinates->verticalPosition:{$coordinates->facingDirection->value}";
    }
}
