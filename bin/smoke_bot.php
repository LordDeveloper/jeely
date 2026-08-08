<?php

require dirname(__DIR__) . '/vendor/autoload.php';

$token = getenv('JEELY_BOT_TOKEN');

if (! is_string($token) || $token === '') {
    fwrite(STDERR, "Set JEELY_BOT_TOKEN before running this smoke test.\n");
    exit(1);
}

$t = new Jeely\Telegram($token);
$me = $t->getMe();

if ($me instanceof Jeely\Api\Types\Error) {
    fwrite(STDERR, 'Error: ' . ($me->description ?? 'unknown') . PHP_EOL);
    exit(1);
}

echo 'OK @' . ($me->username ?? '') . ' id=' . ($me->id ?? '') . PHP_EOL;
