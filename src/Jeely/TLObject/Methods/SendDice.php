<?php
namespace Jeely\TLObject\Methods;

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
* @class SendDice
* @description Use this method to send an animated emoji that will display a random value. On success, the sent Message is returned.
*
*
* @param	string $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
* @param	string $emoji Emoji on which the dice throw animation is based. Currently, must be one of “🎲”, “🎯”, “🏀”, “⚽”, “🎳”, or “🎰”. Dice can have values 1-6 for “🎲”, “🎯” and “🎳”, values 1-5 for “🏀” and “⚽”, and values 1-64 for “🎰”. Defaults to “🎲”
* @param	bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
* @param	bool $protect_content Protects the contents of the sent message from forwarding
* @param	bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
* @param	string $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
* @param	ReplyParameters $reply_parameters Description of the message to reply to
* @param	InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user
*
*
* @property	string $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @property	int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
* @property	string $emoji Emoji on which the dice throw animation is based. Currently, must be one of “🎲”, “🎯”, “🏀”, “⚽”, “🎳”, or “🎰”. Dice can have values 1-6 for “🎲”, “🎯” and “🎳”, values 1-5 for “🏀” and “⚽”, and values 1-64 for “🎰”. Defaults to “🎲”
* @property	bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
* @property	bool $protect_content Protects the contents of the sent message from forwarding
* @property	bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
* @property	string $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
* @property	ReplyParameters $reply_parameters Description of the message to reply to
* @property	InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Message'])]
class SendDice extends MethodDefinition implements MethodDefinitionInterface
{

}