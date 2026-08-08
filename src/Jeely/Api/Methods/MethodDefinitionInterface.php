<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

interface MethodDefinitionInterface
{
    public function __invoke(Telegram $telegram);
}