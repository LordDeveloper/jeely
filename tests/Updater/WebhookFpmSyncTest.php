<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

use Jeely\Async\Loop;
use Jeely\Telegram;
use Jeely\Updater;

return [
    'wait_webhook_defaults_to_sync_async' => function (): void {
        Loop::reset();

        $updater = new Updater('123:ABC');
        $telegram = $updater->telegram();
        $telegram->async(true);

        $ref = new \ReflectionClass(Updater::class);
        $prepare = $ref->getMethod('prepareRuntime');
        $prepare->setAccessible(true);

        $options = [];
        $prepare->invokeArgs($updater, [&$options, false]);

        assertFalse($telegram->isAsync(), 'waitWebhook must default async=false for FPM');
        assertFalse(Loop::isEnabled(), 'sync webhook must not enable Revolt Loop');
    },

    'wait_webhook_async_true_still_enables_loop' => function (): void {
        Loop::reset();

        $updater = new Updater('123:ABC');
        $ref = new \ReflectionClass(Updater::class);
        $prepare = $ref->getMethod('prepareRuntime');
        $prepare->setAccessible(true);

        $options = ['async' => true];
        $prepare->invokeArgs($updater, [&$options, false]);

        assertTrue($updater->telegram()->isAsync());
        assertTrue(Loop::isEnabled(), 'explicit async=true may enable Loop');

        Loop::reset();
    },

    'telegram_flush_pending_requests_is_noop_when_empty' => function (): void {
        $telegram = new Telegram('123:ABC');
        assertFalse($telegram->hasPendingRequests());
        $telegram->flushPendingRequests();
        assertFalse($telegram->hasPendingRequests());
    },

    'global_wait_uses_native_wait_when_loop_disabled' => function (): void {
        Loop::reset();
        assertFalse(Loop::isEnabled());

        $value = wait(\GuzzleHttp\Promise\Create::promiseFor('ok'));
        assertSame('ok', $value);
    },

    'wait_webhook_source_uses_blocking_path' => function (): void {
        $code = file_get_contents(__DIR__ . '/../../src/Jeely/Updater.php');
        assertTrue(is_string($code));
        assertTrue(str_contains($code, 'asyncDefault: false'));
        assertTrue(str_contains($code, 'runWebhookBlocking'));
        assertTrue(str_contains($code, 'flushPendingRequests'));
        assertTrue(str_contains($code, 'Loop::reset()'));
    },
];
