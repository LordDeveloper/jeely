<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class StarAmount
* @description Describes an amount of Telegram Stars.
*
* @property	int $amount Integer amount of Telegram Stars, rounded to 0; can be negative
* @method	int getAmount() Integer amount of Telegram Stars, rounded to 0; can be negative
* @method	bool isAmount()
* @method	$this setAmount()
* @method	$this unsetAmount()

* @property	int $nanostar_amount Optional. The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999; can be negative if and only if amount is non-positive
* @method	int getNanostarAmount() Optional. The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999; can be negative if and only if amount is non-positive
* @method	bool isNanostarAmount()
* @method	$this setNanostarAmount()
* @method	$this unsetNanostarAmount()

*/

class StarAmount extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'amount'=> 'int',
		'nanostar_amount'=> 'int',
	];

}