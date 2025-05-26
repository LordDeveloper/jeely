<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\OwnedGiftRegular;
use Jeely\TLObject\Types\OwnedGiftUnique;


/**
* @class OwnedGift
* @description This object describes a gift received and owned by a user or a chat. Currently, it can be one of
*
*/

class OwnedGift extends TLObject
{
	const JSON_PROPERTY_MAP = [
		OwnedGiftRegular::class,
		OwnedGiftUnique::class,
	];

}