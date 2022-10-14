<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class PollOption
 * @description This object contains information about one answer option in a poll.
 *
 * @method string getText() Option text, 1-100 characters
 * @method int getVoterCount() Number of users that voted for this option
 *
 * @method bool isText()
 * @method bool isVoterCount()
 *
 * @method $this setText()
 * @method $this setVoterCount()
 *
 * @method $this unsetText()
 * @method $this unsetVoterCount()
 *
 * @property string $text Option text, 1-100 characters
 * @property int $voter_count Number of users that voted for this option
 *
 * @see https://core.telegram.org/bots/api#polloption 
 */
class PollOption extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'text' => 'string',
		'voter_count' => 'int',
	];
}