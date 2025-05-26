<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class RevenueWithdrawalStatePending
* @description The withdrawal is in progress.
*
* @property	string $type Type of the state, always “pending”
* @method	string getType() Type of the state, always “pending”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

*/

class RevenueWithdrawalStatePending extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
	];

}