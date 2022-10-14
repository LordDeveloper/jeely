<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class PollAnswer
 * @description This object represents an answer of a user in a non-anonymous poll.
 *
 * @method string getPollId() Unique poll identifier
 * @method User getUser() The user, who changed the answer to the poll
 * @method int[] getOptionIds() 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
 *
 * @method bool isPollId()
 * @method bool isUser()
 * @method bool isOptionIds()
 *
 * @method $this setPollId()
 * @method $this setUser()
 * @method $this setOptionIds()
 *
 * @method $this unsetPollId()
 * @method $this unsetUser()
 * @method $this unsetOptionIds()
 *
 * @property string $poll_id Unique poll identifier
 * @property User $user The user, who changed the answer to the poll
 * @property int[] $option_ids 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
 *
 * @see https://core.telegram.org/bots/api#pollanswer 
 */
class PollAnswer extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'poll_id' => 'string',
		'user' => 'User',
		'option_ids' => 'int[]',
	];
}