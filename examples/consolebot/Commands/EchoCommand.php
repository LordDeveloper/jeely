<?php

declare(strict_types=1);

namespace Examples\Consolebot\Commands;

use Jeely\Console\Command;

final class EchoCommand extends Command
{
    public function name(): string
    {
        return 'echo';
    }

    public function description(): string
    {
        return 'Print arguments to stdout';
    }

    public function handle(): mixed
    {
        $args = $this->input->args();

        if ($args === []) {
            $this->output->writeln('<comment>Usage: echo hello world</comment>');

            return 1;
        }

        $this->output->writeln(implode(' ', $args));

        return 0;
    }
}
