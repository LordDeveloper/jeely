<?php

namespace Jeely\TL\Methods;

use Jeely\Telegram;

interface MethodDefinitionInterface
{
    public function __invoke(Telegram $telegram);
}