<?php

declare(strict_types=1);

namespace Kata;

final class Stack {
private bool $pushed = false;
private mixed $element = null;

    public function size(): int
    {
        if ($this->pushed) {
            return 1;
        }
        return 0;
    }

    public function push(mixed $element): void {
        $this->pushed = true;
        $this->element = $element;
    }

    public function peek(): mixed {
        return $this->element;
    }
}
