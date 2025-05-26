<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PaidMediaPurchased
* @description This object contains information about a paid media purchase.
*
* @property	User $from User who purchased the media
* @method	User getFrom() User who purchased the media
* @method	bool isFrom()
* @method	$this setFrom()
* @method	$this unsetFrom()

* @property	string $paid_media_payload Bot-specified paid media payload
* @method	string getPaidMediaPayload() Bot-specified paid media payload
* @method	bool isPaidMediaPayload()
* @method	$this setPaidMediaPayload()
* @method	$this unsetPaidMediaPayload()

*/

class PaidMediaPurchased extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'from'=> 'User',
		'paid_media_payload'=> 'string',
	];

}