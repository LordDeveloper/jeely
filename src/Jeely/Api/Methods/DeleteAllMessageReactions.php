<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class DeleteAllMessageReactions
 * @description Use this method to remove up to 10000 recent reactions in a group or a supergroup chat added by a given user or chat. The bot must have the 'can_delete_messages' administrator right in the chat. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup in the format ＠username
 * @property int $user_id Identifier of the user whose reactions will be removed, if the reactions were added by a user
 * @property int $actor_chat_id Identifier of the chat whose reactions will be removed, if the reactions were added by a chat
 *
 * @see https://core.telegram.org/bots/api#deleteallmessagereactions
 */
class DeleteAllMessageReactions extends MethodDefinition implements MethodDefinitionInterface
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
