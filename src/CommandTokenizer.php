<?php

namespace Kata;

use Kata\Commands\Command;
use Kata\Commands\MoveForward;
use Kata\Commands\TurnLeft;
use Kata\Commands\TurnRight;

class CommandTokenizer
{
    const COMMANDS = [MoveForward::class, TurnLeft::class, TurnRight::class];

    public function parse(string $input): array{
        return array_map([$this, 'parseStringToCommand'], str_split($input));
    }

    private function parseStringToCommand(string $command): ?Command
    {
        $matchingCommand = array_find(self::COMMANDS, fn($commandClass) => $commandClass::match($command));
        if ($matchingCommand === null) {
            return null;
        }
        return new $matchingCommand;
    }
}