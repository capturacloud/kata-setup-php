<?php

namespace Kata\Commands;

interface Command
{
    public static function match(string $command): bool;
}