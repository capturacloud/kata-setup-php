<?php

namespace Kata\Commands;

class MoveForward implements Command
{

    public static function match(string $command): bool
    {
        return true;
    }
}