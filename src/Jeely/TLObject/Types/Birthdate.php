<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Birthdate
* @description Describes the birthdate of a user.
*
* @property	int $day Day of the user's birth; 1-31
* @method	int getDay() Day of the user's birth; 1-31
* @method	bool isDay()
* @method	$this setDay()
* @method	$this unsetDay()

* @property	int $month Month of the user's birth; 1-12
* @method	int getMonth() Month of the user's birth; 1-12
* @method	bool isMonth()
* @method	$this setMonth()
* @method	$this unsetMonth()

* @property	int $year Optional. Year of the user's birth
* @method	int getYear() Optional. Year of the user's birth
* @method	bool isYear()
* @method	$this setYear()
* @method	$this unsetYear()

*/

class Birthdate extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'day'=> 'int',
		'month'=> 'int',
		'year'=> 'int',
	];

}