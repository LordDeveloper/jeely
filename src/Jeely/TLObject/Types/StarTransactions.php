<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class StarTransactions
* @description Contains a list of Telegram Star transactions.
*
* @property	StarTransaction[] $transactions The list of transactions
* @method	StarTransaction[] getTransactions() The list of transactions
* @method	bool isTransactions()
* @method	$this setTransactions()
* @method	$this unsetTransactions()

*/

class StarTransactions extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'transactions'=> 'StarTransaction[]',
	];

}