<?php

namespace Jeely\Extra;

use ArrayIterator;
use Countable;
use IteratorAggregate;
use JsonSerializable;

class Collection implements IteratorAggregate, Countable, JsonSerializable
{
    protected $items = [];

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }
    
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->items);
    }
    
    public function count(): int
    {
        return count($this->items);
    }
    
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    public function toArray(): array
    {
        return array_map(
            fn ($item) => $item->toArray(),
            $this->items
        );
    }
    
    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

}   
