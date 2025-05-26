<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class TransactionPartnerTelegramApi
* @description Describes a transaction with payment for paid broadcasting.
*
* @property	string $type Type of the transaction partner, always “telegram_api”
* @method	string getType() Type of the transaction partner, always “telegram_api”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int $request_count The number of successful requests that exceeded regular limits and were therefore billed
* @method	int getRequestCount() The number of successful requests that exceeded regular limits and were therefore billed
* @method	bool isRequestCount()
* @method	$this setRequestCount()
* @method	$this unsetRequestCount()

*/

class TransactionPartnerTelegramApi extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'request_count'=> 'int',
	];

}