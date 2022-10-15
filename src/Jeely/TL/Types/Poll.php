<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class Poll
 * @description This object contains information about a poll.
 *
 * @method string getId() Unique poll identifier
 * @method string getQuestion() Poll question, 1-300 characters
 * @method PollOption[] getOptions() List of poll options
 * @method int getTotalVoterCount() Total number of users that voted in the poll
 * @method bool getIsClosed() True, if the poll is closed
 * @method bool getIsAnonymous() True, if the poll is anonymous
 * @method string getType() Poll type, currently can be “regular” or “quiz”
 * @method bool getAllowsMultipleAnswers() True, if the poll allows multiple answers
 * @method int getCorrectOptionId() Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
 * @method string getExplanation() Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
 * @method MessageEntity[] getExplanationEntities() Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
 * @method int getOpenPeriod() Optional. Amount of time in seconds the poll will be active after creation
 * @method int getCloseDate() Optional. Point in time (Unix timestamp) when the poll will be automatically closed
 *
 * @method bool isId()
 * @method bool isQuestion()
 * @method bool isOptions()
 * @method bool isTotalVoterCount()
 * @method bool isIsClosed()
 * @method bool isIsAnonymous()
 * @method bool isType()
 * @method bool isAllowsMultipleAnswers()
 * @method bool isCorrectOptionId()
 * @method bool isExplanation()
 * @method bool isExplanationEntities()
 * @method bool isOpenPeriod()
 * @method bool isCloseDate()
 *
 * @method $this setId()
 * @method $this setQuestion()
 * @method $this setOptions()
 * @method $this setTotalVoterCount()
 * @method $this setIsClosed()
 * @method $this setIsAnonymous()
 * @method $this setType()
 * @method $this setAllowsMultipleAnswers()
 * @method $this setCorrectOptionId()
 * @method $this setExplanation()
 * @method $this setExplanationEntities()
 * @method $this setOpenPeriod()
 * @method $this setCloseDate()
 *
 * @method $this unsetId()
 * @method $this unsetQuestion()
 * @method $this unsetOptions()
 * @method $this unsetTotalVoterCount()
 * @method $this unsetIsClosed()
 * @method $this unsetIsAnonymous()
 * @method $this unsetType()
 * @method $this unsetAllowsMultipleAnswers()
 * @method $this unsetCorrectOptionId()
 * @method $this unsetExplanation()
 * @method $this unsetExplanationEntities()
 * @method $this unsetOpenPeriod()
 * @method $this unsetCloseDate()
 *
 * @property string $id Unique poll identifier
 * @property string $question Poll question, 1-300 characters
 * @property PollOption[] $options List of poll options
 * @property int $total_voter_count Total number of users that voted in the poll
 * @property bool $is_closed True, if the poll is closed
 * @property bool $is_anonymous True, if the poll is anonymous
 * @property string $type Poll type, currently can be “regular” or “quiz”
 * @property bool $allows_multiple_answers True, if the poll allows multiple answers
 * @property int $correct_option_id Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
 * @property string $explanation Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
 * @property MessageEntity[] $explanation_entities Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
 * @property int $open_period Optional. Amount of time in seconds the poll will be active after creation
 * @property int $close_date Optional. Point in time (Unix timestamp) when the poll will be automatically closed
 *
 * @see https://core.telegram.org/bots/api#poll
 */
class Poll extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'question' => 'string',
        'options' => 'PollOption[]',
        'total_voter_count' => 'int',
        'is_closed' => 'bool',
        'is_anonymous' => 'bool',
        'type' => 'string',
        'allows_multiple_answers' => 'bool',
        'correct_option_id' => 'int',
        'explanation' => 'string',
        'explanation_entities' => 'MessageEntity[]',
        'open_period' => 'int',
        'close_date' => 'int',
    ];
}