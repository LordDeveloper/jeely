<?php

namespace Jeely;

use Closure;
use Jeely\Api\Update;
use Jeely\Cache\Cache;
use Jeely\Cache\CacheInterface;
use Jeely\Container\Container;
use Jeely\Database\Connection;
use Jeely\Console\Application as ConsoleApplication;
use Jeely\Handlers\EventHandler;
use Jeely\Http\PendingRequest;
use Jeely\Http\Request as HttpRequest;
use Jeely\Log\LoggerInterface;
use Jeely\Log\NullLogger;
use Jeely\Schedule\Schedule;
use Jeely\Schedule\ScheduleRunner;
use Jeely\Update\MiddlewarePipeline;
use Jeely\Update\UpdateHandlerMode;
use Throwable;

/**
 * High-level bot runner with event handlers, DI, and middleware.
 */
final class Bot
{
    private Updater $updater;

    private Container $container;

    /** @var array<int, callable(Update, callable(Update): mixed): mixed> */
    private array $middleware = [];

    private ?Schedule $schedule = null;

    private ?ConsoleApplication $console = null;

    public function __construct(
        string $token,
        array $browserConfig = [],
        ?LoggerInterface $logger = null,
        ?Container $container = null,
    ) {
        $this->container = $container ?? new Container();
        $this->updater = new Updater($token, $browserConfig, $logger ?? new NullLogger());
        $this->registerDefaults();
    }

    public function updater(): Updater
    {
        return $this->updater;
    }

    public function telegram(): Telegram
    {
        return $this->updater->telegram();
    }

    public function container(): Container
    {
        return $this->container;
    }

    public function logger(): LoggerInterface
    {
        return $this->updater->logger();
    }

    public function concurrency(int $concurrency): self
    {
        $this->updater->concurrency($concurrency);

        return $this;
    }

    /**
     * @param  callable(Throwable, Update|null): void  $handler
     */
    public function onError(callable $handler): self
    {
        $this->updater->onError($handler);

        return $this;
    }

    /**
     * @param  callable(Update, callable(Update): mixed): mixed  $middleware
     */
    public function middleware(callable $middleware): self
    {
        $this->middleware[] = $middleware;

        return $this;
    }

    /**
     * @param  array<string, mixed>  $options  Global/mode options: async|asynchronous, timeout, allowed_updates, host, port, path, secret, ...
     */
    public function run(
        UpdateHandlerMode $mode = UpdateHandlerMode::Polling,
        array $options = [],
    ): BotRunner {
        return new BotRunner($this, $mode, $options);
    }

    /**
     * @param  callable(Schedule): void|null  $register
     */
    public function schedule(?callable $register = null): Schedule
    {
        if ($this->schedule === null) {
            $this->schedule = new Schedule();
            $this->container->instance(Schedule::class, $this->schedule);
            $this->container->instance('schedule', $this->schedule);
        }

        if ($register !== null) {
            $register($this->schedule);
        }

        return $this->schedule;
    }

    public function scheduleRunner(): ?ScheduleRunner
    {
        if ($this->schedule === null || $this->schedule->isEmpty()) {
            return null;
        }

        return new ScheduleRunner($this->schedule, $this->logger());
    }

    /**
     * @param  callable(ConsoleApplication): void|null  $register
     */
    public function console(?callable $register = null): ConsoleApplication
    {
        if ($this->console === null) {
            $this->console = (new ConsoleApplication($this->container, $this->logger()))
                ->withBrowser($this->telegram()->getBrowser());
            $this->container->instance(ConsoleApplication::class, $this->console);
            $this->container->instance('console', $this->console);
        }

        if ($register !== null) {
            $register($this->console);
        }

        return $this->console;
    }

    public function request(): PendingRequest
    {
        return HttpRequest::withClient($this->telegram()->getBrowser());
    }

    /**
     * @return Closure(Update): mixed
     */
    public function handlerCallback(Closure|EventHandler|string $handler): Closure
    {
        if ($handler instanceof Closure) {
            return $this->wrapClosure($handler);
        }

        if ($handler instanceof EventHandler) {
            return $this->wrapEventHandler($handler);
        }

        if (is_string($handler)) {
            $instance = $this->container->make($handler);
            if (! $instance instanceof EventHandler) {
                throw new \InvalidArgumentException('Handler class must extend ' . EventHandler::class . ': ' . $handler);
            }

            return $this->wrapEventHandler($instance);
        }

        throw new \InvalidArgumentException('Handler must be an EventHandler instance, class name, or closure.');
    }

    /**
     * @return Closure(Update): mixed
     */
    private function wrapClosure(Closure $handler): Closure
    {
        $pipeline = new MiddlewarePipeline($this->middleware);

        return function (Update $update) use ($handler, $pipeline): mixed {
            return $pipeline->process($update, $handler);
        };
    }

    /**
     * @return Closure(Update): mixed
     */
    private function wrapEventHandler(EventHandler $handler): Closure
    {
        $handler->boot($this->telegram(), $this->container);

        $pipeline = new MiddlewarePipeline([
            ...$this->middleware,
            ...$handler->getMiddleware(),
        ]);

        return function (Update $update) use ($handler, $pipeline): mixed {
            return $pipeline->process($update, fn (Update $current) => $handler->handleUpdate($current));
        };
    }

    private function registerDefaults(): void
    {
        $telegram = $this->telegram();
        $logger = $this->logger();

        $this->container->instance(Telegram::class, $telegram);
        $this->container->instance('telegram', $telegram);
        $this->container->instance(LoggerInterface::class, $logger);
        $this->container->instance('logger', $logger);

        $this->container->singleton(CacheInterface::class, static fn () => Cache::store());
        $this->container->singleton('cache', static fn () => Cache::store());

        $this->container->bind(Connection::class, static fn () => Connection::default());
        $this->container->bind('database', static fn () => Connection::default());

        $this->container->singleton(PendingRequest::class, fn () => HttpRequest::withClient($telegram->getBrowser()));
        $this->container->singleton('request', fn () => HttpRequest::withClient($telegram->getBrowser()));
    }
}
