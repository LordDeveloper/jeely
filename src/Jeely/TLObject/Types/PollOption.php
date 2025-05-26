<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PollOption
* @description This object contains information about one answer option in a poll.
*
* @property	string $text Option text, 1-100 characters
* @method	string getText() Option text, 1-100 characters
* @method	bool isText()
* @method	$this setText()
* @method	$this unsetText()

* @property	MessageEntity[] $text_entities Optional. Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll option texts
* @method	MessageEntity[] getTextEntities() Optional. Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll option texts
* @method	bool isTextEntities()
* @method	$this setTextEntities()
* @method	$this unsetTextEntities()

* @property	int $voter_count Number of users that voted for this option
* @method	int getVoterCount() Number of users that voted for this option
* @method	bool isVoterCount()
* @method	$this setVoterCount()
* @method	$this unsetVoterCount()

*/

class PollOption extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'text'=> 'string',
		'text_entities'=> 'MessageEntity[]',
		'voter_count'=> 'int',
	];

}