<?php

namespace Jeely\Console;

final class Input
{
    /** @param array<int, string> $argv */
    public function __construct(
        private array $argv,
    ) {
    }

    public function command(): string
    {
        return $this->argv[1] ?? 'list';
    }

    /** @return array<int, string> */
    public function args(): array
    {
        return array_slice($this->argv, 2);
    }

    public function arg(int $index, mixed $default = null): mixed
    {
        return $this->args()[$index] ?? $default;
    }

    public function has(string $flag): bool
    {
        return in_array($flag, $this->args(), true);
    }

    /** @return array<int, string> */
    public function raw(): array
    {
        return $this->argv;
    }
}
