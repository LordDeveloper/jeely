<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetChatMemberTag
 * @description Use this method to set a tag for a regular member in a group or a supergroup. The bot must be an administrator in the chat for this to work and must have the can_manage_tags administrator right. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup in the format ＠username
 * @property int $user_id Unique identifier of the target user
 * @property string $tag New tag for the member; 0-16 characters, emoji are not allowed
 *
 * @see https://core.telegram.org/bots/api#setchatmembertag
 */
class SetChatMemberTag extends MethodDefinition implements MethodDefinitionInterface
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
