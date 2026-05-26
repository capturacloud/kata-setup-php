<?php

namespace Kata;

use Kata\Commands\MoveForward;
use Kata\Commands\TurnLeft;
use Kata\Commands\TurnRight;

class CommandTokenizer
{
    const COMMANDS = [MoveForward::class, TurnLeft::class, TurnRight::class];

    public function parse(string $input): array{
        return array_map(function($command){
            foreach(self::COMMANDS as $commandClass){
                if($commandClass::match($command)){
                    return new $commandClass;
                }
            }
        }, str_split($input));
    }
}