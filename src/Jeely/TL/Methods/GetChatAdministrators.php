<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\ChatMember;

/**
 * @class GetChatAdministrators
 * @description Use this method to get a list of administrators in a chat, which aren't bots. Returns an Array of ChatMember objects.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 *
 * @see https://api.telegram.org/bots/api#getchatadministrators
 */
class GetChatAdministrators extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'ChatMember[]';

    /**
     * @var array $params The value that are taken in the constructor method as method parameters.
     */
    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return ChatMember[]
     */
    public function __invoke()
    {
        return $this->call();
    }
}