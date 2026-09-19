<?php

declare(strict_types=1);

require dirname(__DIR__, 2) . '/vendor/autoload.php';

use Examples\Shopbot\ShopHandler;

['bot' => $bot, 'mode' => $mode, 'options' => $options] = require __DIR__ . '/bootstrap.php';

$bot->concurrency(8)
    ->run(mode: $mode, options: $options)
    ->withHandler(ShopHandler::class)
    ->start();
