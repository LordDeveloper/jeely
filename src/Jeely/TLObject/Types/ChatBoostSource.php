<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\ChatBoostSourcePremium;
use Jeely\TLObject\Types\ChatBoostSourceGiftCode;
use Jeely\TLObject\Types\ChatBoostSourceGiveaway;


/**
* @class ChatBoostSource
* @description This object describes the source of a chat boost. It can be one of
*
*/

class ChatBoostSource extends TLObject
{
	const JSON_PROPERTY_MAP = [
		ChatBoostSourcePremium::class,
		ChatBoostSourceGiftCode::class,
		ChatBoostSourceGiveaway::class,
	];

}