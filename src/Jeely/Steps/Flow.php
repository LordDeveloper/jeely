<?php

namespace Jeely\Steps;

/**
 * Named conversation flow made of ordered steps.
 */
final class Flow
{
    /** @var array<string, Step> */
    private array $steps = [];

    /** @var list<string> */
    private array $order = [];

    /** @var callable(StepContext):mixed|null */
    private $onComplete = null;

    /** @var callable(StepContext):mixed|null */
    private $onCancel = null;

    /** @var callable(StepContext):mixed|null */
    private $onExpire = null;

    /** @var list<callable(StepContext):mixed> */
    private array $beforeEach = [];

    private ?int $ttl = null;

    public function __construct(public readonly string $name)
    {
    }

    public function ttl(?int $seconds): self
    {
        $this->ttl = $seconds;

        return $this;
    }

    public function getTtl(): ?int
    {
        return $this->ttl;
    }

    /**
     * Define or retrieve a step. When $configure is given, it receives the Step.
     *
     * @param  callable(Step):void|null  $configure
     */
    public function step(string $name, ?callable $configure = null): Step
    {
        if (! isset($this->steps[$name])) {
            $this->steps[$name] = new Step($name);
            $this->order[] = $name;
        }

        $step = $this->steps[$name];
        if ($configure !== null) {
            $configure($step);
        }

        return $step;
    }

    /**
     * Shortcut: enter + handle in one call.
     *
     * @param  callable(StepContext):mixed|null  $enter
     * @param  callable(StepContext):mixed|null  $handle
     */
    public function add(string $name, ?callable $enter = null, ?callable $handle = null): Step
    {
        return $this->step($name, function (Step $step) use ($enter, $handle) {
            if ($enter !== null) {
                $step->enter($enter);
            }
            if ($handle !== null) {
                $step->handle($handle);
            }
        });
    }

    /**
     * @param  callable(StepContext):mixed  $callback
     */
    public function onComplete(callable $callback): self
    {
        $this->onComplete = $callback;

        return $this;
    }

    /**
     * @param  callable(StepContext):mixed  $callback
     */
    public function onCancel(callable $callback): self
    {
        $this->onCancel = $callback;

        return $this;
    }

    /**
     * @param  callable(StepContext):mixed  $callback
     */
    public function onExpire(callable $callback): self
    {
        $this->onExpire = $callback;

        return $this;
    }

    /**
     * @param  callable(StepContext):mixed  $callback
     */
    public function beforeEach(callable $callback): self
    {
        $this->beforeEach[] = $callback;

        return $this;
    }

    public function has(string $name): bool
    {
        return isset($this->steps[$name]);
    }

    public function get(string $name): Step
    {
        if (! isset($this->steps[$name])) {
            throw new \InvalidArgumentException("Unknown step [{$name}] in flow [{$this->name}].");
        }

        return $this->steps[$name];
    }

    public function first(): ?Step
    {
        $name = $this->order[0] ?? null;

        return $name === null ? null : $this->steps[$name];
    }

    public function nextAfter(string $current): ?Step
    {
        $index = array_search($current, $this->order, true);
        if ($index === false) {
            return null;
        }

        $next = $this->order[$index + 1] ?? null;

        return $next === null ? null : $this->steps[$next];
    }

    /**
     * @return list<string>
     */
    public function names(): array
    {
        return $this->order;
    }

    public function runComplete(StepContext $ctx): mixed
    {
        return $this->onComplete !== null ? ($this->onComplete)($ctx) : null;
    }

    public function runCancel(StepContext $ctx): mixed
    {
        return $this->onCancel !== null ? ($this->onCancel)($ctx) : null;
    }

    public function runExpire(StepContext $ctx): mixed
    {
        return $this->onExpire !== null ? ($this->onExpire)($ctx) : null;
    }

    public function runBeforeEach(StepContext $ctx): mixed
    {
        $last = null;
        foreach ($this->beforeEach as $hook) {
            $last = $hook($ctx);
            if ($last instanceof StepAction) {
                return $last;
            }
        }

        return $last;
    }
}
