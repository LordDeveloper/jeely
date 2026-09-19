<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap.php';

return [
    'update_mixin_resolves_type_and_payload' => function (): void {
        $update = new \Jeely\Api\Update([
            'update_id' => 1,
            'callback_query' => [
                'id' => 'cq1',
                'from' => ['id' => 9, 'is_bot' => false, 'first_name' => 'Ada'],
                'chat_instance' => 'x',
                'data' => 'ok',
                'message' => [
                    'message_id' => 3,
                    'date' => 1,
                    'chat' => ['id' => 42, 'type' => 'private'],
                    'text' => 'hi',
                ],
            ],
        ]);

        assertEquals('callback_query', $update->type());
        assertTrue($update->is('callback_query'));
        assertInstanceOf(\Jeely\Api\Types\CallbackQuery::class, $update->payload());
        assertEquals(9, $update->from()->id);
        assertEquals(42, $update->chat()->id);
        assertEquals(3, $update->message()->message_id);
        assertTrue(method_exists($update->payload(), 'answer'));
        assertTrue(method_exists($update->payload(), 'edit'));
        assertTrue(method_exists($update, 'reply'));
        assertTrue(method_exists($update, 'answer'));
        assertTrue(method_exists($update, 'callbackQuery'));
    },

    'chat_join_and_payment_mixins_exist' => function (): void {
        assertTrue(trait_exists(\Jeely\Mixins\InteractsWithChatJoinRequest::class));
        assertTrue(trait_exists(\Jeely\Mixins\InteractsWithShippingQuery::class));
        assertTrue(trait_exists(\Jeely\Mixins\InteractsWithPreCheckoutQuery::class));
        assertTrue(method_exists(\Jeely\Api\Types\ChatJoinRequest::class, 'approve'));
        assertTrue(method_exists(\Jeely\Api\Types\ShippingQuery::class, 'reject'));
        assertTrue(method_exists(\Jeely\Api\Types\PreCheckoutQuery::class, 'answer'));
        assertTrue(method_exists(\Jeely\Api\Types\Chat::class, 'notify'));
        assertTrue(method_exists(\Jeely\Api\Types\Chat::class, 'send'));
        assertTrue(method_exists(\Jeely\Api\Types\Chat::class, 'sendRich'));
        assertTrue(method_exists(\Jeely\Api\Types\Message::class, 'react'));
        assertTrue(method_exists(\Jeely\Api\Types\Message::class, 'editText'));
        assertTrue(method_exists(\Jeely\Api\Types\Message::class, 'editRich'));
        assertTrue(method_exists(\Jeely\Api\Types\Message::class, 'editMarkup'));
        assertTrue(method_exists(\Jeely\Api\Types\Message::class, 'replyRich'));
        assertTrue(method_exists(\Jeely\Api\Types\ChatMemberUpdated::class, 'joined'));
    },

    'chat_member_updated_status_helpers' => function (): void {
        $event = new \Jeely\Api\Types\ChatMemberUpdated([
            'chat' => ['id' => 1, 'type' => 'private'],
            'from' => ['id' => 2, 'is_bot' => false, 'first_name' => 'u'],
            'date' => 1,
            'old_chat_member' => [
                'status' => 'kicked',
                'user' => ['id' => 2, 'is_bot' => false, 'first_name' => 'u'],
            ],
            'new_chat_member' => [
                'status' => 'member',
                'user' => ['id' => 2, 'is_bot' => false, 'first_name' => 'u'],
            ],
        ]);

        assertEquals('member', $event->status());
        assertEquals('kicked', $event->previousStatus());
        assertTrue($event->joined());
        assertTrue($event->unblockedBot());
        assertTrue($event->left() === false);
    },
];
