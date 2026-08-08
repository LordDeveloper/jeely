<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class UnpinAllGeneralForumTopicMessages
 * @description Use this method to clear the list of pinned messages in a General forum topic. The bot must be an administrator in the chat for this to work and must have the can_pin_messages administrator right in the supergroup. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup in the format ＠username
 *
 * @see https://core.telegram.org/bots/api#unpinallgeneralforumtopicmessages
 */
class UnpinAllGeneralForumTopicMessages extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'bool';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return bool
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
