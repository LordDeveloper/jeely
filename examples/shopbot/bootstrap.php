<?php

declare(strict_types=1);

use Jeely\Api\Types\Error;
use Jeely\Bot;
use Jeely\Log\Logger;
use Jeely\Update\UpdateHandlerMode;

$root = dirname(__DIR__, 2);
$token = getenv('JEELY_BOT_TOKEN');

if (! is_string($token) || $token === '') {
    fwrite(STDERR, "Set JEELY_BOT_TOKEN before running shopbot.\n");
    exit(1);
}

$mode = strtolower((string) (getenv('JEELY_MODE') ?: 'polling'));
$logger = Logger::stderr('shopbot', getenv('JEELY_LOG_LEVEL') ?: Logger::DEBUG);

$bot = new Bot($token, [
    'verify' => getenv('JEELY_SSL_VERIFY') === '1',
], $logger);

$bot->onError(function (\Throwable $e) use ($logger) {
    $logger->error('handler error: {message}', ['message' => $e->getMessage()]);
});

$logger->info('Connecting shopbot...');

$me = $bot->telegram()->getMe();

if ($me instanceof Error) {
    $logger->error('getMe failed: {description}', ['description' => $me->description ?? 'unknown']);
    exit(1);
}

$logger->info('Shopbot @{username} ready', ['username' => $me->username ?? 'unknown']);

$handlerMode = match ($mode) {
    'server' => UpdateHandlerMode::Server,
    'webhook' => UpdateHandlerMode::Webhook,
    default => UpdateHandlerMode::Polling,
};

$options = match ($handlerMode) {
    UpdateHandlerMode::Polling => [
        'async' => true,
        'timeout' => (int) (getenv('JEELY_POLL_TIMEOUT') ?: 30),
        'allowed_updates' => ['message', 'callback_query'],
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
    'root' => $root,
    'bot' => $bot,
    'logger' => $logger,
    'me' => $me,
    'mode' => $handlerMode,
    'options' => $options,
];
