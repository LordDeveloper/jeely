<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class MessageAutoDeleteTimerChanged
* @description This object represents a service message about a change in auto-delete timer settings.
*
* @property	int $message_auto_delete_time New auto-delete time for messages in the chat; in seconds
* @method	int getMessageAutoDeleteTime() New auto-delete time for messages in the chat; in seconds
* @method	bool isMessageAutoDeleteTime()
* @method	$this setMessageAutoDeleteTime()
* @method	$this unsetMessageAutoDeleteTime()

*/

class MessageAutoDeleteTimerChanged extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'message_auto_delete_time'=> 'int',
	];

}