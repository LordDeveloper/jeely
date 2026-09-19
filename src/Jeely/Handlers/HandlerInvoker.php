<?php

namespace Jeely\Handlers;

use Jeely\Api\Update;

/**
 * Maps Telegram update types to EventHandler method names.
 */
final class HandlerInvoker
{
    /** @var array<string, string> */
    private const TYPE_METHODS = [
        'message' => 'onMessage',
        'edited_message' => 'onEditedMessage',
        'channel_post' => 'onChannelPost',
        'edited_channel_post' => 'onEditedChannelPost',
        'business_connection' => 'onBusinessConnection',
        'business_message' => 'onBusinessMessage',
        'edited_business_message' => 'onEditedBusinessMessage',
        'deleted_business_messages' => 'onDeletedBusinessMessages',
        'message_reaction' => 'onMessageReaction',
        'message_reaction_count' => 'onMessageReactionCount',
        'inline_query' => 'onInlineQuery',
        'chosen_inline_result' => 'onChosenInlineResult',
        'callback_query' => 'onCallbackQuery',
        'shipping_query' => 'onShippingQuery',
        'pre_checkout_query' => 'onPreCheckoutQuery',
        'poll' => 'onPoll',
        'poll_answer' => 'onPollAnswer',
        'my_chat_member' => 'onMyChatMember',
        'chat_member' => 'onChatMember',
        'chat_join_request' => 'onChatJoinRequest',
        'purchased_paid_media' => 'onPurchasedPaidMedia',
    ];

    public static function methodForType(?string $type): ?string
    {
        if ($type === null) {
            return null;
        }

        return self::TYPE_METHODS[$type] ?? self::fallbackMethodName($type);
    }

    public static function invoke(EventHandler $handler, Update $update): mixed
    {
        $method = self::methodForType($update->type());

        if ($method !== null && method_exists($handler, $method)) {
            $result = $handler->{$method}($update);
            if ($result !== null) {
                return $result;
            }
        }

        return $handler->onAny($update);
    }

    private static function fallbackMethodName(string $type): string
    {
        $parts = explode('_', $type);
        $camel = array_shift($parts);

        foreach ($parts as $part) {
            $camel .= ucfirst($part);
        }

        return 'on' . ucfirst($camel);
    }
}
