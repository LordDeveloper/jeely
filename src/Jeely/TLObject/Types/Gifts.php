<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Gifts
* @description This object represent a list of gifts.
*
* @property	Gift[] $gifts The list of gifts
* @method	Gift[] getGifts() The list of gifts
* @method	bool isGifts()
* @method	$this setGifts()
* @method	$this unsetGifts()

*/

class Gifts extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'gifts'=> 'Gift[]',
	];

}