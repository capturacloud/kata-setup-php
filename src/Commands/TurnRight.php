<?php

namespace Kata\Commands;

class TurnRight implements Command
{

    private const string COMMAND = 'R';

    public static function match(string $command): bool
    {
        return $command === self::COMMAND;
    }
}