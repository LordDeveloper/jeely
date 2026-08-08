<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetUserPersonalChatMessages
 * @description Use this method to get the last messages from the personal chat (i.e., the chat currently added to their profile) of a given user. On success, an Array of Message objects is returned.
 *
 * @property int $user_id Unique identifier for the target user
 * @property int $limit The maximum number of messages to return; 1-20
 *
 * @see https://core.telegram.org/bots/api#getuserpersonalchatmessages
 */
class GetUserPersonalChatMessages extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Message[]';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return Message[]
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
