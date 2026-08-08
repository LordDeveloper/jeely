<?php

namespace Jeely;

use ArrayAccess;
use Jeely\Update\NectarHydrator;

/**
 * Nectar — Jeely's native base for Telegram Bot API objects (hydration + shared context).
 */
class Nectar extends NectarHydrator implements ArrayAccess
{
    protected ?Telegram $telegram = null;

    /**
     * Arbitrary context bag shared across the object graph.
     *
     * @var array<string, mixed>
     */
    protected array $shared = [];

    private bool $isBooted = false;

    /**
     * Bind Telegram client and propagate it through the object graph, then run boot lifecycle.
     */
    public function withTelegram(Telegram $telegram): static
    {
        $this->telegram = $telegram;

        foreach ($this as $item) {
            $this->bindTelegramInto($item, $telegram);
        }

        $this->runBootLifecycle();

        return $this;
    }

    /**
     * Share arbitrary context data recursively into nested Nectar objects.
     *
     * Telegram is not passed here — it is bound via {@see withTelegram()} and
     * propagates automatically. Use this from {@see boot()} for extra context.
     *
     * @param  array<string, mixed>  $data
     */
    public function share(array $data): static
    {
        if ($data === []) {
            return $this;
        }

        $this->shared = array_replace($this->shared, $data);

        foreach ($this as $item) {
            $this->shareInto($item, $data);
        }

        return $this;
    }

    /**
     * Read shared context. Without a key, returns the whole bag.
     */
    public function shared(?string $key = null, mixed $default = null): mixed
    {
        if ($key === null) {
            return $this->shared;
        }

        return array_key_exists($key, $this->shared) ? $this->shared[$key] : $default;
    }

    protected function bindTelegramInto(mixed $item, Telegram $telegram): void
    {
        if ($item instanceof self) {
            $item->withTelegram($telegram);
            return;
        }

        if (! is_array($item)) {
            return;
        }

        foreach ($item as $nested) {
            $this->bindTelegramInto($nested, $telegram);
        }
    }

    /**
     * @param  array<string, mixed>  $data
     */
    protected function shareInto(mixed $item, array $data): void
    {
        if ($item instanceof self) {
            // Keep telegram in sync when parent already has it.
            if ($this->telegram !== null && $item->telegram === null) {
                $item->telegram = $this->telegram;
            }

            $item->share($data);
            return;
        }

        if (! is_array($item)) {
            return;
        }

        foreach ($item as $nested) {
            $this->shareInto($nested, $data);
        }
    }

    private function runBootLifecycle(): void
    {
        if ($this->isBooted) {
            return;
        }

        $this->isBooted = true;
        $this->boot();
        $this->booted();
    }

    /**
     * Lifecycle hook for registering shared context via {@see share()}.
     */
    protected function boot(): void
    {
    }

    /**
     * Lifecycle hook after {@see boot()} — finalize derived fields, etc.
     */
    protected function booted(): void
    {
    }

    public function telegram(): ?Telegram
    {
        return $this->telegram;
    }

    public function success(): bool
    {
        return (bool) ($this->ok ?? true);
    }

    public function offsetExists(mixed $offset): bool
    {
        return isset($this->{$offset});
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->{$offset};
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->{$offset} = $value;
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->{$offset});
    }
}
