<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use Jeely\Telegram;
use Jeely\Update\RunOptions;

return [
    'run_options_default_async_is_true' => function (): void {
        $telegram = new Telegram('123:ABC');
        $options = ['timeout' => 30];

        assertTrue(RunOptions::applyAsync($telegram, $options));
        assertTrue($telegram->isAsync());
        assertSame(['timeout' => 30], $options);
    },

    'run_options_async_false_disables_global_async' => function (): void {
        $telegram = new Telegram('123:ABC');
        $options = ['async' => false, 'timeout' => 30];

        assertFalse(RunOptions::applyAsync($telegram, $options));
        assertFalse($telegram->isAsync());
        assertSame(['timeout' => 30], $options);
    },

    'run_options_asynchronous_alias' => function (): void {
        $telegram = new Telegram('123:ABC');
        $options = ['asynchronous' => true];

        assertTrue(RunOptions::applyAsync($telegram, $options));
        assertTrue($telegram->isAsync());
        assertSame([], $options);
    },

    'run_options_async_key_takes_priority_over_asynchronous' => function (): void {
        $options = ['async' => false, 'asynchronous' => true];

        assertFalse(RunOptions::pullAsync($options));
        assertSame(['asynchronous' => true], $options);
    },
];
