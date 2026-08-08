<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class UnpinAllForumTopicMessages
 * @description Use this method to clear the list of pinned messages in a forum topic in a forum supergroup chat or a private chat with a user. In the case of a supergroup chat the bot must be an administrator in the chat for this to work and must have the can_pin_messages administrator right in the supergroup. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup in the format ＠username
 * @property int $message_thread_id Unique identifier for the target message thread of the forum topic
 *
 * @see https://core.telegram.org/bots/api#unpinallforumtopicmessages
 */
class UnpinAllForumTopicMessages extends MethodDefinition implements MethodDefinitionInterface
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
