<?php

namespace Jeely\Schedule;

use GuzzleHttp\Promise\PromiseInterface;
use Jeely\Async\Await;
use Jeely\Log\LoggerInterface;
use Jeely\Log\NullLogger;
use Revolt\EventLoop;
use Throwable;

/**
 * Runs scheduled tasks on the Revolt loop without blocking update handlers.
 */
final class ScheduleRunner
{
    private ?string $watcher = null;

    private bool $running = false;

    public function __construct(
        private Schedule $schedule,
        private ?LoggerInterface $logger = null,
    ) {
        $this->logger ??= new NullLogger();
    }

    public function start(): void
    {
        if ($this->running || $this->schedule->isEmpty()) {
            return;
        }

        $this->running = true;

        $this->watcher = EventLoop::repeat(1.0, function (): void {
            $now = new \DateTimeImmutable();

            foreach ($this->schedule->events() as $event) {
                if (! $event->isDue($now)) {
                    continue;
                }

                $this->dispatch($event);
            }
        });

        $this->logger->info('Schedule runner started ({count} tasks)', [
            'count' => count($this->schedule->events()),
        ]);
    }

    public function stop(): void
    {
        if ($this->watcher !== null) {
            EventLoop::cancel($this->watcher);
            $this->watcher = null;
        }

        $this->running = false;
    }

    public function dispatch(ScheduledEvent $event): PromiseInterface
    {
        return Await::promise($event->run())->then(
            static fn (mixed $result) => $result,
            function (Throwable $e) use ($event): null {
                $this->logger->error('scheduled task failed: {message}', [
                    'message' => $e->getMessage(),
                    'task' => $event->eventName(),
                ]);

                return null;
            }
        );
    }
}
