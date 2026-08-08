<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetChatMemberCount
 * @description Use this method to get the number of members in a chat. Returns Integer on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel in the format ＠username
 *
 * @see https://core.telegram.org/bots/api#getchatmembercount
 */
class GetChatMemberCount extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'int';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return int
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
