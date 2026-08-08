<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class UnbanChatSenderChat
 * @description Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel in the format ＠username
 * @property int $sender_chat_id Unique identifier of the target sender chat
 *
 * @see https://core.telegram.org/bots/api#unbanchatsenderchat
 */
class UnbanChatSenderChat extends MethodDefinition implements MethodDefinitionInterface
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
