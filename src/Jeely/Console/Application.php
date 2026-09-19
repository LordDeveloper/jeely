<?php

namespace Jeely\Console;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Async\Await;
use Jeely\Async\Loop;
use Jeely\Browser;
use Jeely\Container\Container;
use Jeely\Log\LoggerInterface;
use Jeely\Log\NullLogger;
use Throwable;

final class Application
{
    /** @var array<string, Command> */
    private array $commands = [];

    public function __construct(
        private Container $container = new Container(),
        private ?LoggerInterface $logger = null,
        private ?Browser $browser = null,
    ) {
        $this->logger ??= new NullLogger();
    }

    public function container(): Container
    {
        return $this->container;
    }

    public function register(Command|string $command): self
    {
        if (is_string($command)) {
            $command = $this->container->make($command);
        }

        if (! $command instanceof Command) {
            throw new \InvalidArgumentException('Command must extend ' . Command::class);
        }

        $this->commands[$command->name()] = $command;

        return $this;
    }

    /** @param array<int, string>|null $argv */
    public function run(?array $argv = null): int
    {
        $argv ??= $_SERVER['argv'] ?? ['jeely'];
        $input = new Input($argv);
        $output = new Output();

        if ($this->browser !== null) {
            Loop::enable($this->browser);
        }

        try {
            $result = Loop::await($this->dispatch($input, $output));

            if (is_int($result)) {
                return $result;
            }

            return 0;
        } catch (Throwable $e) {
            $this->logger->error('console failed: {message}', ['message' => $e->getMessage()]);
            $output->writeln('<error>' . $e->getMessage() . '</error>');

            return 1;
        }
    }

    public function dispatch(Input $input, ?Output $output = null): PromiseInterface
    {
        $output ??= new Output();
        $name = $input->command();

        if ($name === 'list') {
            return Await::promise($this->listCommands($output));
        }

        $command = $this->commands[$name] ?? null;
        if ($command === null) {
            throw new \InvalidArgumentException('Unknown command: ' . $name);
        }

        $command->boot($input, $output, $this->container);

        return Await::promise($command->run())->then(static function (mixed $result): int {
            return is_int($result) ? $result : 0;
        });
    }

    /** @return array<string, Command> */
    public function commands(): array
    {
        return $this->commands;
    }

    public function withBrowser(Browser $browser): self
    {
        $clone = clone $this;
        $clone->browser = $browser;

        return $clone;
    }

    private function listCommands(Output $output): int
    {
        $output->writeln('Available commands:');

        foreach ($this->commands as $command) {
            $output->writeln(sprintf('  %-20s %s', $command->name(), $command->description()));
        }

        return 0;
    }
}
