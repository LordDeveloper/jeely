<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetChatAdministrators
 * @description Use this method to get a list of administrators in a chat. Returns an Array of ChatMember objects.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel in the format ＠username
 * @property bool $return_bots Pass True to additionally receive all bots that are administrators of the chat. By default, bots other than the current bot are omitted.
 *
 * @see https://core.telegram.org/bots/api#getchatadministrators
 */
class GetChatAdministrators extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'ChatMember[]';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return ChatMember[]
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
