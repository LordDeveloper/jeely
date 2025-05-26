<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PollAnswer
* @description This object represents an answer of a user in a non-anonymous poll.
*
* @property	string $poll_id Unique poll identifier
* @method	string getPollId() Unique poll identifier
* @method	bool isPollId()
* @method	$this setPollId()
* @method	$this unsetPollId()

* @property	Chat $voter_chat Optional. The chat that changed the answer to the poll, if the voter is anonymous
* @method	Chat getVoterChat() Optional. The chat that changed the answer to the poll, if the voter is anonymous
* @method	bool isVoterChat()
* @method	$this setVoterChat()
* @method	$this unsetVoterChat()

* @property	User $user Optional. The user that changed the answer to the poll, if the voter isn't anonymous
* @method	User getUser() Optional. The user that changed the answer to the poll, if the voter isn't anonymous
* @method	bool isUser()
* @method	$this setUser()
* @method	$this unsetUser()

* @property	int[] $option_ids 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
* @method	int[] getOptionIds() 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
* @method	bool isOptionIds()
* @method	$this setOptionIds()
* @method	$this unsetOptionIds()

*/

class PollAnswer extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'poll_id'=> 'string',
		'voter_chat'=> 'Chat',
		'user'=> 'User',
		'option_ids'=> 'int[]',
	];

}