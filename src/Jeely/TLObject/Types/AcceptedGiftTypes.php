<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class AcceptedGiftTypes
* @description This object describes the types of gifts that can be gifted to a user or a chat.
*
* @property	bool $unlimited_gifts True, if unlimited regular gifts are accepted
* @method	bool getUnlimitedGifts() True, if unlimited regular gifts are accepted
* @method	bool isUnlimitedGifts()
* @method	$this setUnlimitedGifts()
* @method	$this unsetUnlimitedGifts()

* @property	bool $limited_gifts True, if limited regular gifts are accepted
* @method	bool getLimitedGifts() True, if limited regular gifts are accepted
* @method	bool isLimitedGifts()
* @method	$this setLimitedGifts()
* @method	$this unsetLimitedGifts()

* @property	bool $unique_gifts True, if unique gifts or gifts that can be upgraded to unique for free are accepted
* @method	bool getUniqueGifts() True, if unique gifts or gifts that can be upgraded to unique for free are accepted
* @method	bool isUniqueGifts()
* @method	$this setUniqueGifts()
* @method	$this unsetUniqueGifts()

* @property	bool $premium_subscription True, if a Telegram Premium subscription is accepted
* @method	bool getPremiumSubscription() True, if a Telegram Premium subscription is accepted
* @method	bool isPremiumSubscription()
* @method	$this setPremiumSubscription()
* @method	$this unsetPremiumSubscription()

*/

class AcceptedGiftTypes extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'unlimited_gifts'=> 'bool',
		'limited_gifts'=> 'bool',
		'unique_gifts'=> 'bool',
		'premium_subscription'=> 'bool',
	];

}