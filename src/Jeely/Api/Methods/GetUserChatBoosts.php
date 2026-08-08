<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetUserChatBoosts
 * @description Use this method to get the list of boosts added to a chat by a user. Requires administrator rights in the chat. Returns a UserChatBoosts object.
 *
 * @property int|string $chat_id Unique identifier for the chat or username of the channel in the format ＠username
 * @property int $user_id Unique identifier of the target user
 *
 * @see https://core.telegram.org/bots/api#getuserchatboosts
 */
class GetUserChatBoosts extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'UserChatBoosts';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return UserChatBoosts
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
