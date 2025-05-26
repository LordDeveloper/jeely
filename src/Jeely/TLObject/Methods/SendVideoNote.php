<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\InputFile;
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
* @class SendVideoNote
* @description As of v.4.0, Telegram clients support rounded square MPEG4 videos of up to 1 minute long. Use this method to send video messages. On success, the sent Message is returned.
*
*
* @param	string $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
* @param	InputFile|string $video_note Video note to send. Pass a file_id as String to send a video note that exists on the Telegram servers (recommended) or upload a new video using multipart/form-data. More information on Sending Files ». Sending video notes by a URL is currently unsupported
* @param	int $duration Duration of sent video in seconds
* @param	int $length Video width and height, i.e. diameter of the video message
* @param	InputFile|string $thumbnail Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
* @param	bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
* @param	bool $protect_content Protects the contents of the sent message from forwarding and saving
* @param	bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
* @param	string $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
* @param	ReplyParameters $reply_parameters Description of the message to reply to
* @param	InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user
*
*
* @property	string $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @property	int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
* @property	InputFile|string $video_note Video note to send. Pass a file_id as String to send a video note that exists on the Telegram servers (recommended) or upload a new video using multipart/form-data. More information on Sending Files ». Sending video notes by a URL is currently unsupported
* @property	int $duration Duration of sent video in seconds
* @property	int $length Video width and height, i.e. diameter of the video message
* @property	InputFile|string $thumbnail Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
* @property	bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
* @property	bool $protect_content Protects the contents of the sent message from forwarding and saving
* @property	bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
* @property	string $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
* @property	ReplyParameters $reply_parameters Description of the message to reply to
* @property	InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Message'])]
class SendVideoNote extends MethodDefinition implements MethodDefinitionInterface
{

}