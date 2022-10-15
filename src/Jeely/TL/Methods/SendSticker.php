<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\ForceReply;
use Jeely\TL\Types\InlineKeyboardMarkup;
use Jeely\TL\Types\InputFile;
use Jeely\TL\Types\Message;
use Jeely\TL\Types\ReplyKeyboardMarkup;
use Jeely\TL\Types\ReplyKeyboardRemove;

/**
 * @class SendSticker
 * @description Use this method to send static .WEBP, animated .TGS, or video .WEBM stickers. On success, the sent Message is returned.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property InputFile|string $sticker Sticker to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a .WEBP file from the Internet, or upload a new one using multipart/form-data. More information on Sending Files »
 * @property bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the sent message from forwarding and saving
 * @property int $reply_to_message_id If the message is a reply, ID of the original message
 * @property bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
 * @property InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 *
 * @see https://api.telegram.org/bots/api#sendsticker
 */
class SendSticker extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'Message';

    /**
     * @var int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * @var string $sticker Sticker to send. Pass a file_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a .WEBP file from the Internet, or upload a new one using multipart/form-data. More information on Sending Files »
     */
    public string $sticker;

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
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return Message
     */
    public function __invoke()
    {
        return $this->call();
    }
}