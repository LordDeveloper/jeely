<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class UnpinAllChatMessages
 * @description Use this method to clear the list of pinned messages in a chat. In private chats and channel direct messages chats, no additional rights are required to unpin all pinned messages. Conversely, the bot must be an administrator with the 'can_pin_messages' right or the 'can_edit_messages' right to unpin all pinned messages in groups and channels respectively. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel in the format ＠username
 *
 * @see https://core.telegram.org/bots/api#unpinallchatmessages
 */
class UnpinAllChatMessages extends MethodDefinition implements MethodDefinitionInterface
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
