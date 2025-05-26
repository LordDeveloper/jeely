<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\MessageOriginUser;
use Jeely\TLObject\Types\MessageOriginHiddenUser;
use Jeely\TLObject\Types\MessageOriginChat;
use Jeely\TLObject\Types\MessageOriginChannel;


/**
* @class MessageOrigin
* @description This object describes the origin of a message. It can be one of
*
*/

class MessageOrigin extends TLObject
{
	const JSON_PROPERTY_MAP = [
		MessageOriginUser::class,
		MessageOriginHiddenUser::class,
		MessageOriginChat::class,
		MessageOriginChannel::class,
	];

}