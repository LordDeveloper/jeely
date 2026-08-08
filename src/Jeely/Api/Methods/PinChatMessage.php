<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class PinChatMessage
 * @description Use this method to add a message to the list of pinned messages in a chat. In private chats and channel direct messages chats, all non-service messages can be pinned. Conversely, the bot must be an administrator with the 'can_pin_messages' right or the 'can_edit_messages' right to pin messages in groups and channels respectively. Returns True on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection on behalf of which the message will be pinned
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel in the format ＠username
 * @property int $message_id Identifier of a message to pin
 * @property bool $disable_notification Pass True if it is not necessary to send a notification to all chat members about the new pinned message. Notifications are always disabled in channels and private chats.
 *
 * @see https://core.telegram.org/bots/api#pinchatmessage
 */
class PinChatMessage extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'bool';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return bool
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
