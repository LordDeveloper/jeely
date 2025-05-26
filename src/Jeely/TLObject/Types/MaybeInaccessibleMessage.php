<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\Message;
use Jeely\TLObject\Types\InaccessibleMessage;


/**
* @class MaybeInaccessibleMessage
* @description This object describes a message that can be inaccessible to the bot. It can be one of
*
*/

class MaybeInaccessibleMessage extends TLObject
{
	const JSON_PROPERTY_MAP = [
		Message::class,
		InaccessibleMessage::class,
	];

}