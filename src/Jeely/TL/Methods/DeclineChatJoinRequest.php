<?php

namespace Jeely\TL\Methods;


/**
 * @class DeclineChatJoinRequest
 * @description Use this method to decline a chat join request. The bot must be an administrator in the chat for this to work and must have the can_invite_users administrator right. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property int $user_id Unique identifier of the target user
 *
 * @see https://api.telegram.org/bots/api#declinechatjoinrequest
 */
class DeclineChatJoinRequest extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'bool';

    /**
     * @var array $params The value that are taken in the constructor method as method parameters.
     */
    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return bool
     */
    public function __invoke()
    {
        return $this->call();
    }
}