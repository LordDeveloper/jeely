<?php

namespace Jeely\TL\Methods;


/**
 * @class GetChatMemberCount
 * @description Use this method to get the number of members in a chat. Returns Int on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 *
 * @see https://api.telegram.org/bots/api#getchatmembercount
 */
class GetChatMemberCount extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'int';

    /**
     * @var array $params The value that are taken in the constructor method as method parameters.
     */
    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return int
     */
    public function __invoke()
    {
        return $this->call();
    }
}