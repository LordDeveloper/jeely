<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

return [
    'tl_error_getters_casting' => function (): void {
        $err = new \Jeely\Api\Types\Error([
            'ok' => false,
            'description' => 'bad',
            'error_code' => '409',
        ]);

        assertTrue($err->success() === false || $err->getErrorCode() === 409, 'sanity check');
        assertEquals(409, $err->getErrorCode(), 'error_code cast to int');
        assertEquals('bad', $err->getDescription(), 'description cast to string');
    },

    'update_maps_new_schema_fields' => function (): void {
        $update = new \Jeely\Api\Update([
            'update_id' => 10,
            'business_message' => [
                'message_id' => 5,
                'date' => 1,
                'chat' => ['id' => 7, 'type' => 'private'],
                'text' => 'hi',
            ],
            'chat_boost' => [
                'chat' => ['id' => 7, 'type' => 'supergroup'],
                'boost' => [
                    'boost_id' => 'b1',
                    'add_date' => 1,
                    'expiration_date' => 2,
                    'source' => [
                        'source' => 'premium',
                        'user' => ['id' => 1, 'is_bot' => false, 'first_name' => 'a'],
                    ],
                ],
            ],
        ]);

        $telegram = new \Jeely\Telegram('1:TOKEN');
        $update->withTelegram($telegram);

        assertEquals(10, $update->getUpdateId());
        assertInstanceOf(\Jeely\Api\Types\Message::class, $update->business_message);
        assertEquals('hi', $update->business_message->text);
        assertInstanceOf(\Jeely\Api\Types\ChatBoostUpdated::class, $update->chat_boost);
        assertSame($telegram, $update->business_message->telegram());
        assertEquals('business_message', $update->shared('update_type'));
        assertInstanceOf(\Jeely\Api\Types\Chat::class, $update->shared('chat'));
        assertSame($update->shared('chat'), $update->business_message->shared('chat'));
    },

    'new_methods_exist_from_schema' => function (): void {
        assertTrue(class_exists(\Jeely\Api\Methods\SendLivePhoto::class));
        assertTrue(class_exists(\Jeely\Api\Methods\GetBusinessConnection::class));
        assertTrue(class_exists(\Jeely\Api\Methods\SetMessageReaction::class));
        assertTrue(class_exists(\Jeely\Api\Types\ReplyParameters::class));
        assertTrue(class_exists(\Jeely\Api\Types\LinkPreviewOptions::class));
    },
];
