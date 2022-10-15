<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\ChatMember;

/**
 * @class GetChatMember
 * @description Use this method to get information about a member of a chat. Returns a ChatMember object on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 * @property int $user_id Unique identifier of the target user
 *
 * @see https://api.telegram.org/bots/api#getchatmember
 */
class GetChatMember extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'ChatMember';

    /**
     * @var int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * @var int $user_id Unique identifier of the target user
     */
    public int $user_id;

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return ChatMember
     */
    public function __invoke()
    {
        return $this->call();
    }
}