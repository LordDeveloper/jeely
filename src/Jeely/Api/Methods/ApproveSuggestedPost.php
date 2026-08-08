<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class ApproveSuggestedPost
 * @description Use this method to approve a suggested post in a direct messages chat. The bot must have the 'can_post_messages' administrator right in the corresponding channel chat. Returns True on success.
 *
 * @property int $chat_id Unique identifier for the target direct messages chat
 * @property int $message_id Identifier of a suggested post message to approve
 * @property int $send_date Point in time (Unix timestamp) when the post is expected to be published; omit if the date has already been specified when the suggested post was created. If specified, then the date must be not more than 2678400 seconds (30 days) in the future.
 *
 * @see https://core.telegram.org/bots/api#approvesuggestedpost
 */
class ApproveSuggestedPost extends MethodDefinition implements MethodDefinitionInterface
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
