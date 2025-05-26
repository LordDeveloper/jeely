<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class VideoChatEnded
* @description This object represents a service message about a video chat ended in the chat.
*
* @property	int $duration Video chat duration in seconds
* @method	int getDuration() Video chat duration in seconds
* @method	bool isDuration()
* @method	$this setDuration()
* @method	$this unsetDuration()

*/

class VideoChatEnded extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'duration'=> 'int',
	];

}