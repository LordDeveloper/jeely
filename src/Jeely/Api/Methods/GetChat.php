<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetChat
 * @description Use this method to get up-to-date information about the chat. Returns a ChatFullInfo object on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel in the format ＠username
 *
 * @see https://core.telegram.org/bots/api#getchat
 */
class GetChat extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'ChatFullInfo';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return ChatFullInfo
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
