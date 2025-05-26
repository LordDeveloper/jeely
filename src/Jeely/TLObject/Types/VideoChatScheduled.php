<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class VideoChatScheduled
* @description This object represents a service message about a video chat scheduled in the chat.
*
* @property	int $start_date Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator
* @method	int getStartDate() Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator
* @method	bool isStartDate()
* @method	$this setStartDate()
* @method	$this unsetStartDate()

*/

class VideoChatScheduled extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'start_date'=> 'int',
	];

}