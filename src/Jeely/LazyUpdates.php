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

    public function setTelegramRecursive(Telegram $telegram): LazyUpdates
    {
        $this->setTelegram($telegram);

        foreach ($this as $item) {
            if ($item instanceof LazyUpdates) {
                $item->setTelegramRecursive(clone $telegram);
            }
        }

        return $this;
    }

    public function isOk(): bool
    {
        return true;
    }

    public function offsetExists(mixed $offset): bool
    {
        return isset($this->{$offset});
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->{$offset};
    }

    public function offsetSet(mixed $offset, mixed $value)
    {
        $this->{$offset} = $value;
    }

    public function offsetUnset(mixed $offset)
    {
        unset($this->{$offset});
    }
}