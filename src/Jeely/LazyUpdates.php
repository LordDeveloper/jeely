<?php

namespace Jeely;

use LazyJsonMapper\LazyJsonMapper;

class LazyUpdates extends LazyJsonMapper implements \ArrayAccess
{
    protected static Telegram $api;

    public function _init()
    {
        self::$api = Container::get(Telegram::class);

        parent::_init();
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