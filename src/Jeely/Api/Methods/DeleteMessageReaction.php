<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class DeleteMessageReaction
 * @description Use this method to remove a reaction from a message in a group or a supergroup chat. The bot must have the 'can_delete_messages' administrator right in the chat. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup in the format ＠username
 * @property int $message_id Identifier of the target message
 * @property int $user_id Identifier of the user whose reaction will be removed, if the reaction was added by a user
 * @property int $actor_chat_id Identifier of the chat whose reaction will be removed, if the reaction was added by a chat
 *
 * @see https://core.telegram.org/bots/api#deletemessagereaction
 */
class DeleteMessageReaction extends MethodDefinition implements MethodDefinitionInterface
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
