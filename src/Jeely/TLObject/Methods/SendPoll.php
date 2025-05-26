<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\MessageEntity;
use Jeely\TLObject\Types\InputPollOption;
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
* @class SendPoll
* @description Use this method to send a native poll. On success, the sent Message is returned.
*
*
* @param	string $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
* @param	string $question Poll question, 1-300 characters
* @param	string $question_parse_mode Mode for parsing entities in the question. See formatting options for more details. Currently, only custom emoji entities are allowed
* @param	MessageEntity[] $question_entities A JSON-serialized list of special entities that appear in the poll question. It can be specified instead of question_parse_mode
* @param	InputPollOption[] $options A JSON-serialized list of 2-10 answer options
* @param	bool $is_anonymous True, if the poll needs to be anonymous, defaults to True
* @param	string $type Poll type, “quiz” or “regular”, defaults to “regular”
* @param	bool $allows_multiple_answers True, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to False
* @param	int $correct_option_id 0-based identifier of the correct answer option, required for polls in quiz mode
* @param	string $explanation Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
* @param	string $explanation_parse_mode Mode for parsing entities in the explanation. See formatting options for more details.
* @param	MessageEntity[] $explanation_entities A JSON-serialized list of special entities that appear in the poll explanation. It can be specified instead of explanation_parse_mode
* @param	int $open_period Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with close_date.
* @param	int $close_date Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with open_period.
* @param	bool $is_closed Pass True if the poll needs to be immediately closed. This can be useful for poll preview.
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
* @property	string $question Poll question, 1-300 characters
* @property	string $question_parse_mode Mode for parsing entities in the question. See formatting options for more details. Currently, only custom emoji entities are allowed
* @property	MessageEntity[] $question_entities A JSON-serialized list of special entities that appear in the poll question. It can be specified instead of question_parse_mode
* @property	InputPollOption[] $options A JSON-serialized list of 2-10 answer options
* @property	bool $is_anonymous True, if the poll needs to be anonymous, defaults to True
* @property	string $type Poll type, “quiz” or “regular”, defaults to “regular”
* @property	bool $allows_multiple_answers True, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to False
* @property	int $correct_option_id 0-based identifier of the correct answer option, required for polls in quiz mode
* @property	string $explanation Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
* @property	string $explanation_parse_mode Mode for parsing entities in the explanation. See formatting options for more details.
* @property	MessageEntity[] $explanation_entities A JSON-serialized list of special entities that appear in the poll explanation. It can be specified instead of explanation_parse_mode
* @property	int $open_period Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with close_date.
* @property	int $close_date Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with open_period.
* @property	bool $is_closed Pass True if the poll needs to be immediately closed. This can be useful for poll preview.
* @property	bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
* @property	bool $protect_content Protects the contents of the sent message from forwarding and saving
* @property	bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
* @property	string $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
* @property	ReplyParameters $reply_parameters Description of the message to reply to
* @property	InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Message'])]
class SendPoll extends MethodDefinition implements MethodDefinitionInterface
{

}