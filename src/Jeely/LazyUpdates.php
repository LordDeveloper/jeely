<?php

namespace Jeely;

use LazyJsonMapper\LazyJsonMapper;

class LazyUpdates extends LazyJsonMapper implements \ArrayAccess
{
    protected ?Telegram $telegram = null;

    public function setTelegram(Telegram $telegram): LazyUpdates
    {
        $this->telegram = $telegram;

        return $this;
    }

    protected function booted()
    {
        
    }

    public function setTelegramRecursive(Telegram $telegram): LazyUpdates
    {
        $this->setTelegram($telegram);

        foreach ($this as $item) {
            if ($item instanceof LazyUpdates) {
                $item->setTelegramRecursive($telegram);
            } elseif (is_array($item)) {
                foreach ($item as $_item) {
                    if ($_item instanceof LazyUpdates) {
                        $_item->setTelegramRecursive($telegram);
                    }
                }
            }
        }
        
        $this->booted();

        return $this;
    }

    public function success(): bool
    {
        return $this->ok ?? true;
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