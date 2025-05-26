<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class TransactionPartnerTelegramAds
* @description Describes a withdrawal transaction to the Telegram Ads platform.
*
* @property	string $type Type of the transaction partner, always “telegram_ads”
* @method	string getType() Type of the transaction partner, always “telegram_ads”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

*/

class TransactionPartnerTelegramAds extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
	];

}