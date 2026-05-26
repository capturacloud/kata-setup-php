<?php

namespace Kata\Commands;

class TurnLeft implements Command
{

    private const string COMMAND = 'L';

    public static function match(string $command): bool
    {
        return $command === self::COMMAND;
    }
}