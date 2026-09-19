<?php

namespace Jeely\Console;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Async\Await;
use Jeely\Container\Container;

abstract class Command
{
    protected Input $input;

    protected Output $output;

    protected Container $container;

    final public function boot(Input $input, Output $output, Container $container): void
    {
        $this->input = $input;
        $this->output = $output;
        $this->container = $container;
    }

    abstract public function name(): string;

    abstract public function description(): string;

    /**
     * @return mixed|PromiseInterface
     */
    abstract public function handle(): mixed;

    final public function run(): mixed
    {
        return Await::promise($this->handle());
    }
}
