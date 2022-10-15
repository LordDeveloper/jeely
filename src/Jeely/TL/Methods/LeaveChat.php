<?php

namespace Jeely\TL\Methods;


/**
 * @class LeaveChat
 * @description Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 *
 * @see https://api.telegram.org/bots/api#leavechat
 */
class LeaveChat extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'bool';

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
     * @return bool
     */
    public function __invoke()
    {
        return $this->call();
    }
}