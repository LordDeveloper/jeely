<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class DeclineSuggestedPost
 * @description Use this method to decline a suggested post in a direct messages chat. The bot must have the 'can_manage_direct_messages' administrator right in the corresponding channel chat. Returns True on success.
 *
 * @property int $chat_id Unique identifier for the target direct messages chat
 * @property int $message_id Identifier of a suggested post message to decline
 * @property string $comment Comment for the creator of the suggested post; 0-128 characters
 *
 * @see https://core.telegram.org/bots/api#declinesuggestedpost
 */
class DeclineSuggestedPost extends MethodDefinition implements MethodDefinitionInterface
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
