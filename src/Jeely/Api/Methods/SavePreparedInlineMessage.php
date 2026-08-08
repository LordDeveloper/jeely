<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SavePreparedInlineMessage
 * @description Stores a message that can be sent by a user of a Mini App. Returns a PreparedInlineMessage object.
 *
 * @property int $user_id Unique identifier of the target user that can use the prepared message
 * @property InlineQueryResult $result A JSON-serialized object describing the message to be sent
 * @property bool $allow_user_chats Pass True if the message can be sent to private chats with users
 * @property bool $allow_bot_chats Pass True if the message can be sent to private chats with bots
 * @property bool $allow_group_chats Pass True if the message can be sent to group and supergroup chats
 * @property bool $allow_channel_chats Pass True if the message can be sent to channel chats
 *
 * @see https://core.telegram.org/bots/api#savepreparedinlinemessage
 */
class SavePreparedInlineMessage extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'PreparedInlineMessage';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return PreparedInlineMessage
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
