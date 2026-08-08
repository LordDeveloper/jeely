<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class UnhideGeneralForumTopic
 * @description Use this method to unhide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup in the format ＠username
 *
 * @see https://core.telegram.org/bots/api#unhidegeneralforumtopic
 */
class UnhideGeneralForumTopic extends MethodDefinition implements MethodDefinitionInterface
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
