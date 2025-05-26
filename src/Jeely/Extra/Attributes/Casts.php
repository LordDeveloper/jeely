<?php

namespace Jeely\Extra\Attributes;

use Jeely\TLObject;
use Jeely\Telegram;
use Attribute;

#[Attribute]
class Casts
{
    public function __construct(public array $types = [])
    {}
}

