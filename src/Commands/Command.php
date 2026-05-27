<?php

namespace Kata\Commands;

use Kata\Coordinates;

interface Command
{
    public static function match(string $command): bool;
    public function execute(Coordinates $coordinates): Coordinates;
}