<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class TransactionPartnerFragment
* @description Describes a withdrawal transaction with Fragment.
*
* @property	string $type Type of the transaction partner, always “fragment”
* @method	string getType() Type of the transaction partner, always “fragment”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	RevenueWithdrawalState $withdrawal_state Optional. State of the transaction if the transaction is outgoing
* @method	RevenueWithdrawalState getWithdrawalState() Optional. State of the transaction if the transaction is outgoing
* @method	bool isWithdrawalState()
* @method	$this setWithdrawalState()
* @method	$this unsetWithdrawalState()

*/

class TransactionPartnerFragment extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'withdrawal_state'=> 'RevenueWithdrawalState',
	];

}