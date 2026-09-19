<?php

declare(strict_types=1);

namespace Examples\Consolebot\Commands;

use Jeely\Console\Command;

final class PingCommand extends Command
{
    public function name(): string
    {
        return 'ping';
    }

    public function description(): string
    {
        return 'Async ping (non-blocking delay)';
    }

    public function handle(): mixed
    {
        $this->output->writeln('waiting...');

        return delay(0.2)->then(function () {
            $this->output->writeln('<info>pong</info>');

            return 0;
        });
    }
}
