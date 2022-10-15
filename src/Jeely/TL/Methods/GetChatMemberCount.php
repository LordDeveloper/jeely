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
    public string $castsTo = 'int';

    /**
     * @var int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return int
     */
    public function __invoke()
    {
        return $this->call();
    }
}