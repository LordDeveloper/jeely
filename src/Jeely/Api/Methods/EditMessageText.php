<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class EditMessageText
 * @description Use this method to edit text, rich and game messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
 *
 * @property string $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
 * @property int|string $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target bot, supergroup or channel in the format ＠username.
 * @property int $message_id Required if inline_message_id is not specified. Identifier of the message to edit.
 * @property string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message.
 * @property string $text New text of the message, 1-4096 characters after entity parsing; required if rich_message isn't specified
 * @property string $parse_mode Mode for parsing entities in the message text. See formatting options for more details.
 * @property MessageEntity[] $entities A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
 * @property LinkPreviewOptions $link_preview_options Link preview generation options for the message
 * @property InputRichMessage $rich_message New rich content of the message; required if text isn't specified. Direct upload of new files isn't supported when an inline message is edited.
 * @property InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard
 *
 * @see https://core.telegram.org/bots/api#editmessagetext
 */
class EditMessageText extends MethodDefinition implements MethodDefinitionInterface
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
