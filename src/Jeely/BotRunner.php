<?php

namespace Jeely;

use Closure;
use Jeely\Api\Update;
use Jeely\Handlers\EventHandler;
use Jeely\Update\UpdateHandlerMode;

/**
 * Fluent runner returned by {@see Bot::run()}.
 */
final class BotRunner
{
    /** @var array<int, Closure(Update): mixed> */
    private array $handlers = [];

    public function __construct(
        private Bot $bot,
        private UpdateHandlerMode $mode,
        /** @var array<string, mixed> */
        private array $options,
    ) {
    }

    /**
     * Register an event handler (instance, class name, or closure).
     */
    public function withHandler(EventHandler|Closure|string $handler): self
    {
        $this->handlers[] = $this->bot->handlerCallback($handler);

        return $this;
    }

    /**
     * Start receiving updates (blocking).
     */
    public function start(): void
    {
        if ($this->handlers === []) {
            throw new \RuntimeException('At least one handler is required. Call withHandler() before start().');
        }

        $callback = $this->combineHandlers($this->handlers);
        $updater = $this->bot->updater();

        $this->bot->scheduleRunner()?->start();

        match ($this->mode) {
            UpdateHandlerMode::Polling => $updater->waitPolling($callback, $this->options),
            UpdateHandlerMode::Server => $updater->waitServer($callback, $this->options),
            UpdateHandlerMode::Webhook => $updater->waitWebhook($callback, $this->options),
        };
    }

    /**
     * @param  array<int, Closure(Update): mixed>  $handlers
     */
    private function combineHandlers(array $handlers): Closure
    {
        return function (Update $update) use ($handlers): mixed {
            foreach ($handlers as $handler) {
                $result = $handler($update);
                if ($result !== null) {
                    return $result;
                }
            }

            return null;
        };
    }
}
