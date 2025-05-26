<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\InputPaidMedia;
use Jeely\TLObject\Types\MessageEntity;
use Jeely\TLObject\Types\ReplyParameters;
use Jeely\TLObject\Types\InlineKeyboardMarkup;
use Jeely\TLObject\Types\ReplyKeyboardMarkup;
use Jeely\TLObject\Types\ReplyKeyboardRemove;
use Jeely\TLObject\Types\ForceReply;
use Jeely\TLObject\Types\Message;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SendPaidMedia
* @description Use this method to send paid media. On success, the sent Message is returned.
*
*
* @param	string $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername). If the chat is a channel, all Telegram Star proceeds from this media will be credited to the chat's balance. Otherwise, they will be credited to the bot's balance.
* @param	int $star_count The number of Telegram Stars that must be paid to buy access to the media; 1-10000
* @param	InputPaidMedia[] $media A JSON-serialized array describing the media to be sent; up to 10 items
* @param	string $payload Bot-defined paid media payload, 0-128 bytes. This will not be displayed to the user, use it for your internal processes.
* @param	string $caption Media caption, 0-1024 characters after entities parsing
* @param	string $parse_mode Mode for parsing entities in the media caption. See formatting options for more details.
* @param	MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
* @param	bool $show_caption_above_media Pass True, if the caption must be shown above the message media
* @param	bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
* @param	bool $protect_content Protects the contents of the sent message from forwarding and saving
* @param	bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
* @param	ReplyParameters $reply_parameters Description of the message to reply to
* @param	InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user
*
*
* @property	string $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername). If the chat is a channel, all Telegram Star proceeds from this media will be credited to the chat's balance. Otherwise, they will be credited to the bot's balance.
* @property	int $star_count The number of Telegram Stars that must be paid to buy access to the media; 1-10000
* @property	InputPaidMedia[] $media A JSON-serialized array describing the media to be sent; up to 10 items
* @property	string $payload Bot-defined paid media payload, 0-128 bytes. This will not be displayed to the user, use it for your internal processes.
* @property	string $caption Media caption, 0-1024 characters after entities parsing
* @property	string $parse_mode Mode for parsing entities in the media caption. See formatting options for more details.
* @property	MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
* @property	bool $show_caption_above_media Pass True, if the caption must be shown above the message media
* @property	bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
* @property	bool $protect_content Protects the contents of the sent message from forwarding and saving
* @property	bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
* @property	ReplyParameters $reply_parameters Description of the message to reply to
* @property	InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Message'])]
class SendPaidMedia extends MethodDefinition implements MethodDefinitionInterface
{

}