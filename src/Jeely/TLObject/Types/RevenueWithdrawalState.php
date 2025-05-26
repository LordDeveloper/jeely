<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\RevenueWithdrawalStatePending;
use Jeely\TLObject\Types\RevenueWithdrawalStateSucceeded;
use Jeely\TLObject\Types\RevenueWithdrawalStateFailed;


/**
* @class RevenueWithdrawalState
* @description This object describes the state of a revenue withdrawal operation. Currently, it can be one of
*
*/

class RevenueWithdrawalState extends TLObject
{
	const JSON_PROPERTY_MAP = [
		RevenueWithdrawalStatePending::class,
		RevenueWithdrawalStateSucceeded::class,
		RevenueWithdrawalStateFailed::class,
	];

}