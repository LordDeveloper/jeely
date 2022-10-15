<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\ForceReply;
use Jeely\TL\Types\InlineKeyboardMarkup;
use Jeely\TL\Types\Message;
use Jeely\TL\Types\MessageEntity;
use Jeely\TL\Types\ReplyKeyboardMarkup;
use Jeely\TL\Types\ReplyKeyboardRemove;

/**
 * @class SendMessage
 * @description Use this method to send text messages. On success, the sent Message is returned.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property string $text Text of the message to be sent, 1-4096 characters after entities parsing
 * @property string $parse_mode Mode for parsing entities in the message text. See formatting options for more details.
 * @property MessageEntity[] $entities A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
 * @property bool $disable_web_page_preview Disables link previews for links in this message
 * @property bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the sent message from forwarding and saving
 * @property int $reply_to_message_id If the message is a reply, ID of the original message
 * @property bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
 * @property InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 *
 * @see https://api.telegram.org/bots/api#sendmessage
 */
class SendMessage extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'Message';

    /**
     * @var int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * @var string $text Text of the message to be sent, 1-4096 characters after entities parsing
     */
    public string $text;

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
     * @var ?bool $disable_web_page_preview Disables link previews for links in this message
     */
    public ?bool $disable_web_page_preview = null;

    /**
     * @var MessageEntity[] $entities A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
     */
    public array $entities = [];

    /**
     * @var string $parse_mode Mode for parsing entities in the message text. See formatting options for more details.
     */
    public string $parse_mode = '';

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