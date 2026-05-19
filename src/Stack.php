<?php

declare(strict_types=1);

namespace Kata;

final class Stack {
private bool $pushed = false;
private mixed $element = null;
private int $counter = 0;

    public function size(): int
    {
        if ($this->pushed) {
            return 1;
        }
        return 0;
    }

    public function push(mixed $element): void {
        if ($this->counter === 0) {
            $this->element = $element;
        }
        $this->pushed = true;
        $this->counter++;
    }

    public function peek(): mixed {
        return $this->element;
    }

    public function pop(): mixed {
        $this->counter--;
        return $this->pushed = false;
    }

    public function isEmpty(): bool{
        return true;
    }
}
