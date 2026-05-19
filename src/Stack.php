<?php

declare(strict_types=1);

namespace Kata;

final class Stack {
private mixed $element = null;
private int $counter = 0;
private array $elements = [];

    public function size(): int {
        return $this->counter;
    }

    public function push(mixed $element): void {
        if ($this->counter === 0) {
            $this->element = $element;
        }
        $this->elements[0] = $element;

        $this->counter++;
    }

    public function peek(): mixed {
        return $this->element;
    }

    public function pop(): mixed {
        $this->counter--;
        return $this->elements[0];
    }

    public function isEmpty(): bool {
        return $this->counter === 0;
    }
}
