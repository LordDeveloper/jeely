<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class EditMessageCaption
 * @description Use this method to edit captions of messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
 *
 * @property string $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
 * @property int|string $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format ＠username.
 * @property int $message_id Required if inline_message_id is not specified. Identifier of the message to edit.
 * @property string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message.
 * @property string $caption New caption of the message, 0-1024 characters after entities parsing
 * @property string $parse_mode Mode for parsing entities in the message caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property bool $show_caption_above_media Pass True if the caption must be shown above the message media. Supported only for animation, photo and video messages.
 * @property InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard
 *
 * @see https://core.telegram.org/bots/api#editmessagecaption
 */
class EditMessageCaption extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Message';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return Message|bool
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
