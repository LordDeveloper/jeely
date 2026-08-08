<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class EditEphemeralMessageText
 * @description Use this method to edit an ephemeral text message. Note that it is not guaranteed that the user will receive the message edit event, especially if they are offline. On success, True is returned.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup in the format ＠username
 * @property int $receiver_user_id Identifier of the user who received the message
 * @property int $ephemeral_message_id Identifier of the ephemeral message to edit
 * @property string $text New text of the message, 1-4096 characters after entity parsing
 * @property string $parse_mode Mode for parsing entities in the message text. See formatting options for more details.
 * @property MessageEntity[] $entities A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
 * @property LinkPreviewOptions $link_preview_options Link preview generation options for the message
 * @property InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard
 *
 * @see https://core.telegram.org/bots/api#editephemeralmessagetext
 */
class EditEphemeralMessageText extends MethodDefinition implements MethodDefinitionInterface
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
