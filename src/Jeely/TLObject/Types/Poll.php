<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Poll
* @description This object contains information about a poll.
*
* @property	string $id Unique poll identifier
* @method	string getId() Unique poll identifier
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	string $question Poll question, 1-300 characters
* @method	string getQuestion() Poll question, 1-300 characters
* @method	bool isQuestion()
* @method	$this setQuestion()
* @method	$this unsetQuestion()

* @property	MessageEntity[] $question_entities Optional. Special entities that appear in the question. Currently, only custom emoji entities are allowed in poll questions
* @method	MessageEntity[] getQuestionEntities() Optional. Special entities that appear in the question. Currently, only custom emoji entities are allowed in poll questions
* @method	bool isQuestionEntities()
* @method	$this setQuestionEntities()
* @method	$this unsetQuestionEntities()

* @property	PollOption[] $options List of poll options
* @method	PollOption[] getOptions() List of poll options
* @method	bool isOptions()
* @method	$this setOptions()
* @method	$this unsetOptions()

* @property	int $total_voter_count Total number of users that voted in the poll
* @method	int getTotalVoterCount() Total number of users that voted in the poll
* @method	bool isTotalVoterCount()
* @method	$this setTotalVoterCount()
* @method	$this unsetTotalVoterCount()

* @property	bool $is_closed True, if the poll is closed
* @method	bool getIsClosed() True, if the poll is closed
* @method	bool isIsClosed()
* @method	$this setIsClosed()
* @method	$this unsetIsClosed()

* @property	bool $is_anonymous True, if the poll is anonymous
* @method	bool getIsAnonymous() True, if the poll is anonymous
* @method	bool isIsAnonymous()
* @method	$this setIsAnonymous()
* @method	$this unsetIsAnonymous()

* @property	string $type Poll type, currently can be “regular” or “quiz”
* @method	string getType() Poll type, currently can be “regular” or “quiz”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	bool $allows_multiple_answers True, if the poll allows multiple answers
* @method	bool getAllowsMultipleAnswers() True, if the poll allows multiple answers
* @method	bool isAllowsMultipleAnswers()
* @method	$this setAllowsMultipleAnswers()
* @method	$this unsetAllowsMultipleAnswers()

* @property	int $correct_option_id Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
* @method	int getCorrectOptionId() Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
* @method	bool isCorrectOptionId()
* @method	$this setCorrectOptionId()
* @method	$this unsetCorrectOptionId()

* @property	string $explanation Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
* @method	string getExplanation() Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
* @method	bool isExplanation()
* @method	$this setExplanation()
* @method	$this unsetExplanation()

* @property	MessageEntity[] $explanation_entities Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
* @method	MessageEntity[] getExplanationEntities() Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
* @method	bool isExplanationEntities()
* @method	$this setExplanationEntities()
* @method	$this unsetExplanationEntities()

* @property	int $open_period Optional. Amount of time in seconds the poll will be active after creation
* @method	int getOpenPeriod() Optional. Amount of time in seconds the poll will be active after creation
* @method	bool isOpenPeriod()
* @method	$this setOpenPeriod()
* @method	$this unsetOpenPeriod()

* @property	int $close_date Optional. Point in time (Unix timestamp) when the poll will be automatically closed
* @method	int getCloseDate() Optional. Point in time (Unix timestamp) when the poll will be automatically closed
* @method	bool isCloseDate()
* @method	$this setCloseDate()
* @method	$this unsetCloseDate()

*/

class Poll extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'id'=> 'string',
		'question'=> 'string',
		'question_entities'=> 'MessageEntity[]',
		'options'=> 'PollOption[]',
		'total_voter_count'=> 'int',
		'is_closed'=> 'bool',
		'is_anonymous'=> 'bool',
		'type'=> 'string',
		'allows_multiple_answers'=> 'bool',
		'correct_option_id'=> 'int',
		'explanation'=> 'string',
		'explanation_entities'=> 'MessageEntity[]',
		'open_period'=> 'int',
		'close_date'=> 'int',
	];

}