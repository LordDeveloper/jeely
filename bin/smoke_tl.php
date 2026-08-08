<?php

require __DIR__ . '/../vendor/autoload.php';

$u = new Jeely\Api\Update([
    'update_id' => 1,
    'business_connection' => [
        'id' => 'x',
        'user' => ['id' => 1, 'is_bot' => false, 'first_name' => 'a'],
        'user_chat_id' => 1,
        'date' => 1,
        'is_enabled' => true,
    ],
    'message_reaction' => [
        'chat' => ['id' => 1, 'type' => 'private'],
        'message_id' => 2,
        'user' => ['id' => 1, 'is_bot' => false, 'first_name' => 'a'],
        'date' => 1,
        'old_reaction' => [],
        'new_reaction' => [],
    ],
]);

$u->share(new Jeely\Telegram('1:A'));

echo get_class($u->business_connection) . PHP_EOL;
echo $u->business_connection->id . PHP_EOL;
echo get_class($u->message_reaction) . PHP_EOL;
echo (class_exists(Jeely\Api\Methods\SendLivePhoto::class) ? 'SendLivePhoto ok' : 'missing') . PHP_EOL;
echo (class_exists(Jeely\Api\Types\MessageReactionUpdated::class) ? 'Reaction ok' : 'missing') . PHP_EOL;
echo 'methods=' . count(glob(__DIR__ . '/../src/Jeely/Api/Methods/*.php')) . PHP_EOL;
echo 'types=' . count(glob(__DIR__ . '/../src/Jeely/Api/Types/*.php')) . PHP_EOL;
