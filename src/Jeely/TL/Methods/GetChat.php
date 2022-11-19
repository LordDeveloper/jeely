<?php

namespace Jeely\TL\Methods;

use Jeely\Telegram;
use Jeely\TL\Types\Chat;

/**
 * @class GetChat
 * @description Use this method to get up to date information about the chat (current name of the user for one-on-one conversations, current username of a user, group or channel, etc.). Returns a Chat object on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
 *
 *
 * @see https://api.telegram.org/bots/api#getchat
 */
class GetChat extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Peer';

    /**
     * @var mixed $params The value that are taken in the constructor method as method parameters.
     */
    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return Chat
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}