<?php

namespace Jeely;

use LazyJsonMapper\LazyJsonMapper;

class LazyUpdates extends LazyJsonMapper
{
    protected static Telegram $api;

    public function _init()
    {
        self::$api = Container::get(Telegram::class);

        parent::_init();
    }
}