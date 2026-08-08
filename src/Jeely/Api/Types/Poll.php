<?php

namespace Jeely\Api\Types;

/**
 * @class Poll
 * @description This object contains information about a poll.
 *
 * @method string getId() Unique poll identifier
 * @method string getQuestion() Poll question, 1-300 characters
 * @method MessageEntity[] getQuestionEntities() Optional. Special entities that appear in the question. Currently, only custom emoji entities are allowed in poll questions
 * @method PollOption[] getOptions() List of poll options
 * @method int getTotalVoterCount() Total number of users that voted in the poll
 * @method bool getIsClosed() True, if the poll is closed
 * @method bool getIsAnonymous() True, if the poll is anonymous
 * @method string getType() Poll type, currently can be “regular” or “quiz”
 * @method bool getAllowsMultipleAnswers() True, if the poll allows multiple answers
 * @method bool getAllowsRevoting() True, if the poll allows to change the chosen answer options
 * @method bool getMembersOnly() True if voting is limited to users who have been members of the chat where the poll was originally sent for more than 24 hours
 * @method string[] getCountryCodes() Optional. A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which users can vote in the poll. The country code “FT” is used for users with anonymous numbers. If omitted, then users from any country can participate in the poll.
 * @method int[] getCorrectOptionIds() Optional. Array of 0-based identifiers of the correct answer options. Available only for polls in quiz mode which are closed or were sent (not forwarded) by the bot or to the private chat with the bot.
 * @method string getExplanation() Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
 * @method MessageEntity[] getExplanationEntities() Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
 * @method PollMedia getExplanationMedia() Optional. Media added to the quiz explanation
 * @method int getOpenPeriod() Optional. Amount of time in seconds the poll will be active after creation
 * @method int getCloseDate() Optional. Point in time (Unix timestamp) when the poll will be automatically closed
 * @method string getDescription() Optional. Description of the poll; for polls inside the Message object only
 * @method MessageEntity[] getDescriptionEntities() Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the description
 * @method PollMedia getMedia() Optional. Media added to the poll description; for polls inside the Message object only
 *
 * @method bool isId()
 * @method bool isQuestion()
 * @method bool isQuestionEntities()
 * @method bool isOptions()
 * @method bool isTotalVoterCount()
 * @method bool isIsClosed()
 * @method bool isIsAnonymous()
 * @method bool isType()
 * @method bool isAllowsMultipleAnswers()
 * @method bool isAllowsRevoting()
 * @method bool isMembersOnly()
 * @method bool isCountryCodes()
 * @method bool isCorrectOptionIds()
 * @method bool isExplanation()
 * @method bool isExplanationEntities()
 * @method bool isExplanationMedia()
 * @method bool isOpenPeriod()
 * @method bool isCloseDate()
 * @method bool isDescription()
 * @method bool isDescriptionEntities()
 * @method bool isMedia()
 *
 * @method $this setId()
 * @method $this setQuestion()
 * @method $this setQuestionEntities()
 * @method $this setOptions()
 * @method $this setTotalVoterCount()
 * @method $this setIsClosed()
 * @method $this setIsAnonymous()
 * @method $this setType()
 * @method $this setAllowsMultipleAnswers()
 * @method $this setAllowsRevoting()
 * @method $this setMembersOnly()
 * @method $this setCountryCodes()
 * @method $this setCorrectOptionIds()
 * @method $this setExplanation()
 * @method $this setExplanationEntities()
 * @method $this setExplanationMedia()
 * @method $this setOpenPeriod()
 * @method $this setCloseDate()
 * @method $this setDescription()
 * @method $this setDescriptionEntities()
 * @method $this setMedia()
 *
 * @method $this unsetId()
 * @method $this unsetQuestion()
 * @method $this unsetQuestionEntities()
 * @method $this unsetOptions()
 * @method $this unsetTotalVoterCount()
 * @method $this unsetIsClosed()
 * @method $this unsetIsAnonymous()
 * @method $this unsetType()
 * @method $this unsetAllowsMultipleAnswers()
 * @method $this unsetAllowsRevoting()
 * @method $this unsetMembersOnly()
 * @method $this unsetCountryCodes()
 * @method $this unsetCorrectOptionIds()
 * @method $this unsetExplanation()
 * @method $this unsetExplanationEntities()
 * @method $this unsetExplanationMedia()
 * @method $this unsetOpenPeriod()
 * @method $this unsetCloseDate()
 * @method $this unsetDescription()
 * @method $this unsetDescriptionEntities()
 * @method $this unsetMedia()
 *
 * @property string $id Unique poll identifier
 * @property string $question Poll question, 1-300 characters
 * @property MessageEntity[] $question_entities Optional. Special entities that appear in the question. Currently, only custom emoji entities are allowed in poll questions
 * @property PollOption[] $options List of poll options
 * @property int $total_voter_count Total number of users that voted in the poll
 * @property bool $is_closed True, if the poll is closed
 * @property bool $is_anonymous True, if the poll is anonymous
 * @property string $type Poll type, currently can be “regular” or “quiz”
 * @property bool $allows_multiple_answers True, if the poll allows multiple answers
 * @property bool $allows_revoting True, if the poll allows to change the chosen answer options
 * @property bool $members_only True if voting is limited to users who have been members of the chat where the poll was originally sent for more than 24 hours
 * @property string[] $country_codes Optional. A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which users can vote in the poll. The country code “FT” is used for users with anonymous numbers. If omitted, then users from any country can participate in the poll.
 * @property int[] $correct_option_ids Optional. Array of 0-based identifiers of the correct answer options. Available only for polls in quiz mode which are closed or were sent (not forwarded) by the bot or to the private chat with the bot.
 * @property string $explanation Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
 * @property MessageEntity[] $explanation_entities Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
 * @property PollMedia $explanation_media Optional. Media added to the quiz explanation
 * @property int $open_period Optional. Amount of time in seconds the poll will be active after creation
 * @property int $close_date Optional. Point in time (Unix timestamp) when the poll will be automatically closed
 * @property string $description Optional. Description of the poll; for polls inside the Message object only
 * @property MessageEntity[] $description_entities Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the description
 * @property PollMedia $media Optional. Media added to the poll description; for polls inside the Message object only
 *
 * @see https://core.telegram.org/bots/api#poll
 */
class Poll extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'question' => 'string',
        'question_entities' => 'MessageEntity[]',
        'options' => 'PollOption[]',
        'total_voter_count' => 'int',
        'is_closed' => 'bool',
        'is_anonymous' => 'bool',
        'type' => 'string',
        'allows_multiple_answers' => 'bool',
        'allows_revoting' => 'bool',
        'members_only' => 'bool',
        'country_codes' => 'string[]',
        'correct_option_ids' => 'int[]',
        'explanation' => 'string',
        'explanation_entities' => 'MessageEntity[]',
        'explanation_media' => 'PollMedia',
        'open_period' => 'int',
        'close_date' => 'int',
        'description' => 'string',
        'description_entities' => 'MessageEntity[]',
        'media' => 'PollMedia',
    ];
}
