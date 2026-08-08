<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Jeely\Api\Update;
use Jeely\Updater;

$token = getenv('JEELY_BOT_TOKEN');

if (! is_string($token) || $token === '') {
    fwrite(STDERR, "Set JEELY_BOT_TOKEN before running this example.\n");
    exit(1);
}

$updater = new Updater($token);

$me = $updater->telegram()->getMe();
echo 'Bot @' . ($me->username ?? 'unknown') . " is running. Send a message...\n";

$updater->waitPolling(function (Update $update) {
    $message = $update->message();

    if ($message === null || $message->text === null) {
        return;
    }

    echo sprintf(
        "[%s] %s: %s\n",
        date('H:i:s'),
        $message->from->username ?? $message->from->id ?? 'user',
        $message->text
    );

    $message->reply('helloworld');
});
