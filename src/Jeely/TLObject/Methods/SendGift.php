<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\MessageEntity;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SendGift
* @description Sends a gift to the given user or channel chat. The gift can't be converted to Telegram Stars by the receiver. Returns True on success.
*
*
* @param	int $user_id Required if chat_id is not specified. Unique identifier of the target user who will receive the gift.
* @param	int|string $chat_id Required if user_id is not specified. Unique identifier for the chat or username of the channel (in the format @channelusername) that will receive the gift.
* @param	string $gift_id Identifier of the gift
* @param	bool $pay_for_upgrade Pass True to pay for the gift upgrade from the bot's balance, thereby making the upgrade free for the receiver
* @param	string $text Text that will be shown along with the gift; 0-128 characters
* @param	string $text_parse_mode Mode for parsing entities in the text. See formatting options for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom_emoji” are ignored.
* @param	MessageEntity[] $text_entities A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of text_parse_mode. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom_emoji” are ignored.
*
*
* @property	int $user_id Required if chat_id is not specified. Unique identifier of the target user who will receive the gift.
* @property	int|string $chat_id Required if user_id is not specified. Unique identifier for the chat or username of the channel (in the format @channelusername) that will receive the gift.
* @property	string $gift_id Identifier of the gift
* @property	bool $pay_for_upgrade Pass True to pay for the gift upgrade from the bot's balance, thereby making the upgrade free for the receiver
* @property	string $text Text that will be shown along with the gift; 0-128 characters
* @property	string $text_parse_mode Mode for parsing entities in the text. See formatting options for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom_emoji” are ignored.
* @property	MessageEntity[] $text_entities A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of text_parse_mode. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom_emoji” are ignored.
*
*/

#[Casts(['bool'])]
class SendGift extends MethodDefinition implements MethodDefinitionInterface
{

}