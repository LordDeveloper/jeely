<?php

declare(strict_types=1);

use Examples\Schedulebot\StatsStore;
use Jeely\Api\Types\Error;
use Jeely\Bot;
use Jeely\Log\Logger;
use Jeely\Schedule\Schedule;
use Jeely\Update\UpdateHandlerMode;

$token = getenv('JEELY_BOT_TOKEN');

if (! is_string($token) || $token === '') {
    fwrite(STDERR, "Set JEELY_BOT_TOKEN before running schedulebot.\n");
    exit(1);
}

$mode = strtolower((string) (getenv('JEELY_MODE') ?: 'polling'));
$logger = Logger::stderr('schedulebot', getenv('JEELY_LOG_LEVEL') ?: Logger::DEBUG);
$adminChatId = getenv('JEELY_ADMIN_CHAT_ID');
$adminChatId = is_string($adminChatId) && $adminChatId !== '' ? (int) $adminChatId : null;

$bot = new Bot($token, [
    'verify' => getenv('JEELY_SSL_VERIFY') === '1',
], $logger);

$bot->onError(function (\Throwable $e) use ($logger) {
    $logger->error('handler error: {message}', ['message' => $e->getMessage()]);
});

$bot->schedule(function (Schedule $schedule) use ($logger, $bot, $adminChatId) {
    $schedule->everyMinute(function () use ($logger) {
        StatsStore::tickMinute();
        $logger->info('cron: everyMinute heartbeat (ticks={n})', [
            'n' => StatsStore::snapshot()['minute_ticks'],
        ]);

        return null;
    })->name('heartbeat');

    $schedule->everySeconds(15, function () use ($logger) {
        StatsStore::tickFast();
        $logger->debug('cron: every 15 seconds (ticks={n})', [
            'n' => StatsStore::snapshot()['fast_ticks'],
        ]);

        return null;
    })->name('fast-tick')->withoutOverlapping();

    $schedule->cron('0 0 9 * * *', function () use ($logger, $bot, $adminChatId) {
        StatsStore::markDaily();
        $logger->info('cron: daily report at 09:00:00');

        if ($adminChatId === null) {
            return null;
        }

        $stats = StatsStore::snapshot();

        return $bot->telegram()->sendMessage([
            'chat_id' => $adminChatId,
            'text' => implode("\n", [
                'Daily schedule report',
                '',
                'minute ticks: ' . $stats['minute_ticks'],
                'fast ticks:   ' . $stats['fast_ticks'],
            ]),
            'async' => true,
        ]);
    })->name('daily-report');
});

$logger->info('Connecting schedulebot...');

$me = $bot->telegram()->getMe();

if ($me instanceof Error) {
    $logger->error('getMe failed: {description}', ['description' => $me->description ?? 'unknown']);
    exit(1);
}

$logger->info('Schedulebot @{username} ready ({tasks} cron tasks)', [
    'username' => $me->username ?? 'unknown',
    'tasks' => count($bot->schedule()->events()),
]);

$handlerMode = match ($mode) {
    'server' => UpdateHandlerMode::Server,
    'webhook' => UpdateHandlerMode::Webhook,
    default => UpdateHandlerMode::Polling,
};

$options = match ($handlerMode) {
    UpdateHandlerMode::Polling => [
        'async' => true,
        'timeout' => (int) (getenv('JEELY_POLL_TIMEOUT') ?: 30),
        'allowed_updates' => ['message'],
    ],
    UpdateHandlerMode::Server => [
        'async' => true,
        'host' => getenv('JEELY_HOST') ?: '0.0.0.0',
        'port' => (int) (getenv('JEELY_PORT') ?: 8080),
        'path' => getenv('JEELY_WEBHOOK_PATH') ?: '/webhook',
        'secret' => getenv('JEELY_WEBHOOK_SECRET') ?: null,
    ],
    UpdateHandlerMode::Webhook => ['async' => true],
};

return [
    'bot' => $bot,
    'logger' => $logger,
    'me' => $me,
    'mode' => $handlerMode,
    'options' => $options,
];
