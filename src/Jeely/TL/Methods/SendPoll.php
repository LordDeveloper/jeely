<?php

namespace Jeely\TL\Methods;

use Jeely\Telegram;
use Jeely\TL\Types\ForceReply;
use Jeely\TL\Types\InlineKeyboardMarkup;
use Jeely\TL\Types\Message;
use Jeely\TL\Types\MessageEntity;
use Jeely\TL\Types\ReplyKeyboardMarkup;
use Jeely\TL\Types\ReplyKeyboardRemove;

/**
 * @class SendPoll
 * @description Use this method to send a native poll. On success, the sent Message is returned.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property string $question Poll question, 1-300 characters
 * @property string[] $options A JSON-serialized list of answer options, 2-10 strings 1-100 characters each
 * @property bool $is_anonymous True, if the poll needs to be anonymous, defaults to True
 * @property string $type Poll type, “quiz” or “regular”, defaults to “regular”
 * @property bool $allows_multiple_answers True, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to False
 * @property int $correct_option_id 0-based identifier of the correct answer option, required for polls in quiz mode
 * @property string $explanation Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
 * @property string $explanation_parse_mode Mode for parsing entities in the explanation. See formatting options for more details.
 * @property MessageEntity[] $explanation_entities A JSON-serialized list of special entities that appear in the poll explanation, which can be specified instead of parse_mode
 * @property int $open_period Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with close_date.
 * @property int $close_date Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with open_period.
 * @property bool $is_closed Pass True if the poll needs to be immediately closed. This can be useful for poll preview.
 * @property bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the sent message from forwarding and saving
 * @property int $reply_to_message_id If the message is a reply, ID of the original message
 * @property bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
 * @property InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
 *
 *
 * @see https://api.telegram.org/bots/api#sendpoll
 */
class SendPoll extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Message';

    /**
     * @var mixed $params The value that are taken in the constructor method as method parameters.
     */
    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return Message
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}