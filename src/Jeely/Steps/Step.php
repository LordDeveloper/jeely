<?php

namespace Jeely\Steps;

/**
 * A single named step inside a Flow.
 */
final class Step
{
    /** @var callable(StepContext):mixed|null */
    private $onEnter = null;

    /** @var callable(StepContext):mixed|null */
    private $onHandle = null;

    /** @var callable(StepContext):bool|string|null|null */
    private $validator = null;

    /** @var callable(StepContext):bool|null */
    private $skipIf = null;

    /** @var list<callable(StepContext):mixed> */
    private array $before = [];

    public function __construct(public readonly string $name)
    {
    }

    /**
     * Invoked when the user arrives at this step (after navigation).
     *
     * @param  callable(StepContext):mixed  $callback
     */
    public function enter(callable $callback): self
    {
        $this->onEnter = $callback;

        return $this;
    }

    /**
     * Invoked when user input arrives while on this step.
     *
     * @param  callable(StepContext):mixed  $callback
     */
    public function handle(callable $callback): self
    {
        $this->onHandle = $callback;

        return $this;
    }

    /**
     * Return true, or throw/return error string to reject input.
     *
     * @param  callable(StepContext):bool|string|null  $callback
     */
    public function validate(callable $callback): self
    {
        $this->validator = $callback;

        return $this;
    }

    /**
     * If returns true, step is skipped automatically (jump to next).
     *
     * @param  callable(StepContext):bool  $callback
     */
    public function skipIf(callable $callback): self
    {
        $this->skipIf = $callback;

        return $this;
    }

    /**
     * @param  callable(StepContext):mixed  $callback
     */
    public function before(callable $callback): self
    {
        $this->before[] = $callback;

        return $this;
    }

    public function hasEnter(): bool
    {
        return $this->onEnter !== null;
    }

    public function hasHandle(): bool
    {
        return $this->onHandle !== null;
    }

    public function shouldSkip(StepContext $ctx): bool
    {
        if ($this->skipIf === null) {
            return false;
        }

        return (bool) ($this->skipIf)($ctx);
    }

    public function runBefore(StepContext $ctx): mixed
    {
        $last = null;
        foreach ($this->before as $hook) {
            $last = $hook($ctx);
            if ($last instanceof StepAction) {
                return $last;
            }
        }

        return $last;
    }

    public function runEnter(StepContext $ctx): mixed
    {
        return $this->onEnter !== null ? ($this->onEnter)($ctx) : null;
    }

    public function runValidate(StepContext $ctx): true|string
    {
        if ($this->validator === null) {
            return true;
        }

        $result = ($this->validator)($ctx);
        if ($result === true || $result === null) {
            return true;
        }

        if ($result === false) {
            return 'Invalid input.';
        }

        return (string) $result;
    }

    public function runHandle(StepContext $ctx): mixed
    {
        return $this->onHandle !== null ? ($this->onHandle)($ctx) : StepAction::next();
    }
}
