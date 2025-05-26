<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\ReplyParameters;
use Jeely\TLObject\Types\Message;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SendMediaGroup
* @description Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an array of Messages that were sent is returned.
*
*
* @param	string $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
* @param	InputMediaAudio|InputMediaDocument|InputMediaPhoto|InputMediaVideo[] $media A JSON-serialized array describing messages to be sent, must include 2-10 items
* @param	bool $disable_notification Sends messages silently. Users will receive a notification with no sound.
* @param	bool $protect_content Protects the contents of the sent messages from forwarding and saving
* @param	bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
* @param	string $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
* @param	ReplyParameters $reply_parameters Description of the message to reply to
*
*
* @property	string $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @property	int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
* @property	InputMediaAudio|InputMediaDocument|InputMediaPhoto|InputMediaVideo[] $media A JSON-serialized array describing messages to be sent, must include 2-10 items
* @property	bool $disable_notification Sends messages silently. Users will receive a notification with no sound.
* @property	bool $protect_content Protects the contents of the sent messages from forwarding and saving
* @property	bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
* @property	string $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
* @property	ReplyParameters $reply_parameters Description of the message to reply to
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Message[]'])]
class SendMediaGroup extends MethodDefinition implements MethodDefinitionInterface
{

}