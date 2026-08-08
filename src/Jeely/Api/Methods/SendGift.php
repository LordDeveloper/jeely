<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SendGift
 * @description Sends a gift to the given user or channel chat. The gift can't be converted to Telegram Stars by the receiver. Returns True on success.
 *
 * @property int $user_id Required if chat_id is not specified. Unique identifier of the target user who will receive the gift.
 * @property int|string $chat_id Required if user_id is not specified. Unique identifier for the chat or username of the channel (in the format ＠username) that will receive the gift.
 * @property string $gift_id Identifier of the gift; limited gifts can't be sent to channel chats
 * @property bool $pay_for_upgrade Pass True to pay for the gift upgrade from the bot's balance, thereby making the upgrade free for the receiver
 * @property string $text Text that will be shown along with the gift; 0-128 characters
 * @property string $text_parse_mode Mode for parsing entities in the text. See formatting options for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are ignored.
 * @property MessageEntity[] $text_entities A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of text_parse_mode. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are ignored.
 *
 * @see https://core.telegram.org/bots/api#sendgift
 */
class SendGift extends MethodDefinition implements MethodDefinitionInterface
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
