<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use GuzzleHttp\Promise\FulfilledPromise;
use Jeely\Async\Loop;
use Jeely\Browser;
use Jeely\Console\Application;
use Jeely\Console\Command;

final class AsyncPingCommand extends Command
{
    public function name(): string
    {
        return 'ping';
    }

    public function description(): string
    {
        return 'Async ping';
    }

    public function handle(): mixed
    {
        return delay(0.05)->then(function () {
            $this->output->writeln('pong');

            return 0;
        });
    }
}

return [
    'console_runs_async_command' => function (): void {
        $browser = Browser::factory();
        Loop::enable($browser);

        $app = (new Application())->withBrowser($browser);
        $app->register(new AsyncPingCommand());

        $code = $app->run(['jeely', 'ping']);
        assertSame(0, $code);
    },

    'console_command_can_return_promise_directly' => function (): void {
        $app = new Application();
        $app->register(new class extends Command {
            public function name(): string
            {
                return 'ok';
            }

            public function description(): string
            {
                return 'ok';
            }

            public function handle(): mixed
            {
                return new FulfilledPromise(0);
            }
        });

        $result = wait($app->dispatch(new \Jeely\Console\Input(['jeely', 'ok'])));
        assertSame(0, $result);
    },
];
