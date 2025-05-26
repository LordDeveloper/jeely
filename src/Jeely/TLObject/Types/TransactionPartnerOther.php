<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class TransactionPartnerOther
* @description Describes a transaction with an unknown source or recipient.
*
* @property	string $type Type of the transaction partner, always “other”
* @method	string getType() Type of the transaction partner, always “other”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

*/

class TransactionPartnerOther extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
	];

}