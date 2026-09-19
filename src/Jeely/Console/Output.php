<?php

namespace Jeely\Console;

final class Output
{
    public function __construct(private mixed $stream = STDERR)
    {
    }

    public function writeln(string $line = ''): void
    {
        fwrite($this->stream, $line . PHP_EOL);
    }

    public function write(string $text): void
    {
        fwrite($this->stream, $text);
    }
}
