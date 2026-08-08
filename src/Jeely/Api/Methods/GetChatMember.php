<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetChatMember
 * @description Use this method to get information about a member of a chat. The method is only guaranteed to work for other users if the bot is an administrator in the chat. Returns a ChatMember object on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel in the format ＠username
 * @property int $user_id Unique identifier of the target user
 *
 * @see https://core.telegram.org/bots/api#getchatmember
 */
class GetChatMember extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'ChatMember';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return ChatMember
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
