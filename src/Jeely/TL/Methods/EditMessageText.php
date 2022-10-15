<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\InlineKeyboardMarkup;
use Jeely\TL\Types\Message;
use Jeely\TL\Types\MessageEntity;

/**
 * @class EditMessageText
 * @description Use this method to edit text and game messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 *
 * @property int|string $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property int $message_id Required if inline_message_id is not specified. Identifier of the message to edit
 * @property string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
 * @property string $text New text of the message, 1-4096 characters after entities parsing
 * @property string $parse_mode Mode for parsing entities in the message text. See formatting options for more details.
 * @property MessageEntity[] $entities A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
 * @property bool $disable_web_page_preview Disables link previews for links in this message
 * @property InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard.
 *
 * @see https://api.telegram.org/bots/api#editmessagetext
 */
class EditMessageText extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'Message';

    /**
     * @var string $text New text of the message, 1-4096 characters after entities parsing
     */
    public string $text;

    /**
     * @var mixed $reply_markup A JSON-serialized object for an inline keyboard.
     */
    public mixed $reply_markup = null;

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
     * @var string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
     */
    public string $inline_message_id = '';

    /**
     * @var int $message_id Required if inline_message_id is not specified. Identifier of the message to edit
     */
    public int $message_id = 0;

    /**
     * @var int|string $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     */
    public int|string $chat_id = 0;

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return Message|bool
     */
    public function __invoke()
    {
        return $this->call();
    }
}