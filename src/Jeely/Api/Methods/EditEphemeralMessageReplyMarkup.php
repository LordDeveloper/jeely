<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class EditEphemeralMessageReplyMarkup
 * @description Use this method to edit only the reply markup of an ephemeral message. Note that it is not guaranteed that the user will receive the message edit event, especially if they are offline. On success, True is returned.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup in the format ＠username
 * @property int $receiver_user_id Identifier of the user who received the message
 * @property int $ephemeral_message_id Identifier of the ephemeral message to edit
 * @property InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard
 *
 * @see https://core.telegram.org/bots/api#editephemeralmessagereplymarkup
 */
class EditEphemeralMessageReplyMarkup extends MethodDefinition implements MethodDefinitionInterface
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
