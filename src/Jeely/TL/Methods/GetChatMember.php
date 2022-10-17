<?php

namespace Jeely\TL\Methods;

use Jeely\Telegram;
use Jeely\TL\Types\ChatMember;

/**
 * @class GetChatMember
 * @description Use this method to get information about a member of a chat. Returns a ChatMember object on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 * @property int $user_id Unique identifier of the target user
 *
 *
 * @see https://api.telegram.org/bots/api#getchatmember
 */
class GetChatMember extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'ChatMember';

    /**
     * @var mixed $params The value that are taken in the constructor method as method parameters.
     */
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