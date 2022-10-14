<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\ForceReply;
use Jeely\TL\Types\InlineKeyboardMarkup;
use Jeely\TL\Types\InputFile;
use Jeely\TL\Types\Message;
use Jeely\TL\Types\MessageEntity;
use Jeely\TL\Types\ReplyKeyboardMarkup;
use Jeely\TL\Types\ReplyKeyboardRemove;

/**
 * @class SendAudio
 * @description Use this method to send audio files, if you want Telegram clients to display them in the music player. Your audio must be in the .MP3 or .M4A format. On success, the sent Message is returned. Bots can currently send audio files of up to 50 MB in size, this limit may be changed in the future.
For sending voice messages, use the sendVoice method instead.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property InputFile|string $audio Audio file to send. Pass a file_id as String to send an audio file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an audio file from the Internet, or upload a new one using multipart/form-data. More information on Sending Files »
 * @property string $caption Audio caption, 0-1024 characters after entities parsing
 * @property string $parse_mode Mode for parsing entities in the audio caption. See formatting options for more details.
 * @property MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
 * @property int $duration Duration of the audio in seconds
 * @property string $performer Performer
 * @property string $title Track name
 * @property InputFile|string $thumb Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @property bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the sent message from forwarding and saving
 * @property int $reply_to_message_id If the message is a reply, ID of the original message
 * @property bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
 * @property InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 * 
 * @see https://api.telegram.org/bots/api#sendaudio
 */
class SendAudio  extends MethodDefinition implements MethodDefinitionInterface
{
	public string $castsTo = 'Message';

	/**
 	* @var int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 	*/
	public int|string $chat_id;

	/**
 	* @var string $audio Audio file to send. Pass a file_id as String to send an audio file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an audio file from the Internet, or upload a new one using multipart/form-data. More information on Sending Files »
 	*/
	public string $audio;

	/**
 	* @var mixed $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 	*/
	public mixed $reply_markup = null;

	/**
 	* @var ?bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
 	*/
	public ?bool $allow_sending_without_reply = null;

	/**
 	* @var int $reply_to_message_id If the message is a reply, ID of the original message
 	*/
	public int $reply_to_message_id = 0;

	/**
 	* @var ?bool $protect_content Protects the contents of the sent message from forwarding and saving
 	*/
	public ?bool $protect_content = null;

	/**
 	* @var ?bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 	*/
	public ?bool $disable_notification = null;

	/**
 	* @var string|null $thumb Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 	*/
	public string|null $thumb = null;

	/**
 	* @var string $title Track name
 	*/
	public string $title = '';

	/**
 	* @var string $performer Performer
 	*/
	public string $performer = '';

	/**
 	* @var int $duration Duration of the audio in seconds
 	*/
	public int $duration = 0;

	/**
 	* @var MessageEntity[] $caption_entities A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
 	*/
	public array $caption_entities = [];

	/**
 	* @var string $parse_mode Mode for parsing entities in the audio caption. See formatting options for more details.
 	*/
	public string $parse_mode = '';

	/**
 	* @var string $caption Audio caption, 0-1024 characters after entities parsing
 	*/
	public string $caption = '';

	/**
	 * @var array $vars The value that are taken in the constructor method as method parameters.
	 */
	public function __construct(public array $vars = [])
	{}

	/**
	 * @return Message
	 */
	public function __invoke()
	{
		return $this->call();
	}
}