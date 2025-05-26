<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class RevenueWithdrawalStateSucceeded
* @description The withdrawal succeeded.
*
* @property	string $type Type of the state, always “succeeded”
* @method	string getType() Type of the state, always “succeeded”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int $date Date the withdrawal was completed in Unix time
* @method	int getDate() Date the withdrawal was completed in Unix time
* @method	bool isDate()
* @method	$this setDate()
* @method	$this unsetDate()

* @property	string $url An HTTPS URL that can be used to see transaction details
* @method	string getUrl() An HTTPS URL that can be used to see transaction details
* @method	bool isUrl()
* @method	$this setUrl()
* @method	$this unsetUrl()

*/

class RevenueWithdrawalStateSucceeded extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'date'=> 'int',
		'url'=> 'string',
	];

}