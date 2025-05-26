<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class RevenueWithdrawalStateFailed
* @description The withdrawal failed and the transaction was refunded.
*
* @property	string $type Type of the state, always “failed”
* @method	string getType() Type of the state, always “failed”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

*/

class RevenueWithdrawalStateFailed extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
	];

}