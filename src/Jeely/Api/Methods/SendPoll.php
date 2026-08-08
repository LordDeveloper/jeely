<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SendPoll
 * @description Use this method to send a native poll. On success, the sent Message is returned.
 *
 * @property string $business_connection_id Unique identifier of the business connection on behalf of which the message will be sent
 * @property int|string $chat_id Unique identifier for the target chat or username of the target bot, supergroup or channel in the format ＠username. Polls can't be sent to channel direct messages chats.
 * @property int $message_thread_id Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
 * @property string $question Poll question, 1-300 characters
 * @property string $question_parse_mode Mode for parsing entities in the question. See formatting options for more details. Currently, only custom emoji entities are allowed.
 * @property MessageEntity[] $question_entities A JSON-serialized list of special entities that appear in the poll question. It can be specified instead of question_parse_mode.
 * @property InputPollOption[] $options A JSON-serialized list of 1-12 answer options
 * @property bool $is_anonymous True, if the poll needs to be anonymous, defaults to True
 * @property string $type Poll type, “quiz” or “regular”, defaults to “regular”
 * @property bool $allows_multiple_answers Pass True if the poll allows multiple answers, defaults to False
 * @property bool $allows_revoting Pass True if the poll allows to change chosen answer options, defaults to False for quizzes and to True for regular polls
 * @property bool $shuffle_options Pass True if the poll options must be shown in random order
 * @property bool $allow_adding_options Pass True if answer options can be added to the poll after creation; not supported for anonymous polls and quizzes
 * @property bool $hide_results_until_closes Pass True if poll results must be shown only after the poll closes
 * @property bool $members_only Pass True if voting is limited to users who have been members of the chat where the poll is being sent for more than 24 hours; for channel chats only
 * @property string[] $country_codes A JSON-serialized list of 0-12 two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which users can vote in the poll; for channel chats only. Use “FT” as a country code to allow users with anonymous numbers to vote. If omitted or empty, then users from any country can participate in the poll.
 * @property int[] $correct_option_ids A JSON-serialized list of monotonically increasing 0-based identifiers of the correct answer options, required for polls in quiz mode
 * @property string $explanation Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
 * @property string $explanation_parse_mode Mode for parsing entities in the explanation. See formatting options for more details.
 * @property MessageEntity[] $explanation_entities A JSON-serialized list of special entities that appear in the poll explanation. It can be specified instead of explanation_parse_mode.
 * @property InputPollMedia $explanation_media Media added to the quiz explanation
 * @property int $open_period Amount of time in seconds the poll will be active after creation, 5-2628000. Can't be used together with close_date.
 * @property int $close_date Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 2628000 seconds in the future. Can't be used together with open_period.
 * @property bool $is_closed Pass True if the poll needs to be immediately closed. This can be useful for poll preview.
 * @property string $description Description of the poll to be sent, 0-1024 characters after entities parsing
 * @property string $description_parse_mode Mode for parsing entities in the poll description. See formatting options for more details.
 * @property MessageEntity[] $description_entities A JSON-serialized list of special entities that appear in the poll description, which can be specified instead of description_parse_mode
 * @property InputPollMedia $media Media added to the poll description
 * @property bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the sent message from forwarding and saving
 * @property bool $allow_paid_broadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance.
 * @property string $message_effect_id Unique identifier of the message effect to be added to the message; for private chats only
 * @property ReplyParameters $reply_parameters Description of the message to reply to
 * @property InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $reply_markup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user.
 *
 * @see https://core.telegram.org/bots/api#sendpoll
 */
class SendPoll extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Message';

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
