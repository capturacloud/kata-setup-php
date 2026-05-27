<?php

declare(strict_types=1);

namespace Kata;

final class MarsRover
{
    const int INITIAL_HORIZONTAL_POSITION = 0;
    const int INITIAL_VERTICAL_POSITION = 0;
    const CardinalDirections INITIAL_FACING_DIRECTION = CardinalDirections::North;

    public function execute(string $command): string
    {
        $commandList = new CommandTokenizer()->parse($command);
        $coordinates = new Coordinates(
            self::INITIAL_VERTICAL_POSITION,
            self::INITIAL_HORIZONTAL_POSITION,
            self::INITIAL_FACING_DIRECTION
        );

        foreach($commandList as $currentCommand) {
            $coordinates = $currentCommand->execute($coordinates);
        }

        return "$coordinates->horizontalPosition:$coordinates->verticalPosition:{$coordinates->facingDirection->value}";
    }
}
