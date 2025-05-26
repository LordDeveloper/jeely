<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class UniqueGiftInfo
* @description Describes a service message about a unique gift that was sent or received.
*
* @property	UniqueGift $gift Information about the gift
* @method	UniqueGift getGift() Information about the gift
* @method	bool isGift()
* @method	$this setGift()
* @method	$this unsetGift()

* @property	string $origin Origin of the gift. Currently, either “upgrade” or “transfer”
* @method	string getOrigin() Origin of the gift. Currently, either “upgrade” or “transfer”
* @method	bool isOrigin()
* @method	$this setOrigin()
* @method	$this unsetOrigin()

* @property	string $owned_gift_id Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
* @method	string getOwnedGiftId() Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
* @method	bool isOwnedGiftId()
* @method	$this setOwnedGiftId()
* @method	$this unsetOwnedGiftId()

* @property	int $transfer_star_count Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
* @method	int getTransferStarCount() Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
* @method	bool isTransferStarCount()
* @method	$this setTransferStarCount()
* @method	$this unsetTransferStarCount()

*/

class UniqueGiftInfo extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'gift'=> 'UniqueGift',
		'origin'=> 'string',
		'owned_gift_id'=> 'string',
		'transfer_star_count'=> 'int',
	];

}