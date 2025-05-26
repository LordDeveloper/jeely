<?php

namespace Jeely;

use Jeely\Tools\LazyMapper\Mapper;

/**
 * @property Telegram $telegram
 */
class TLObject extends Mapper implements \ArrayAccess
{
    protected function booted()
    {
        
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