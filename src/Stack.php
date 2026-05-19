<?php

declare(strict_types=1);

namespace Kata;

final class Stack {
private array $elements = [];

    public function size(): int {
        return count($this->elements);
    }

    public function push(mixed $element): void {
        $this->elements[] = $element;
    }

    public function peek(): mixed {
        return end($this->elements);
    }

    public function pop(): mixed {
        return array_pop($this->elements);
    }

    public function isEmpty(): bool {
        return empty($this->elements);
    }
}
