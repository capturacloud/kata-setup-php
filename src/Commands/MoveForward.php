<?php

namespace Kata\Commands;

class MoveForward implements Command
{

    private const string COMMAND = 'M';

    public static function match(string $command): bool
    {
        return $command === self::COMMAND;
    }
}