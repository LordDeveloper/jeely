<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class ApproveChatJoinRequest
 * @description Use this method to approve a chat join request. The bot must be an administrator in the chat for this to work and must have the can_invite_users administrator right. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel in the format ＠username
 * @property int $user_id Unique identifier of the target user
 *
 * @see https://core.telegram.org/bots/api#approvechatjoinrequest
 */
class ApproveChatJoinRequest extends MethodDefinition implements MethodDefinitionInterface
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
