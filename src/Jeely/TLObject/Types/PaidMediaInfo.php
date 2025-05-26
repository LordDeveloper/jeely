<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PaidMediaInfo
* @description Describes the paid media added to a message.
*
* @property	int $star_count The number of Telegram Stars that must be paid to buy access to the media
* @method	int getStarCount() The number of Telegram Stars that must be paid to buy access to the media
* @method	bool isStarCount()
* @method	$this setStarCount()
* @method	$this unsetStarCount()

* @property	PaidMedia[] $paid_media Information about the paid media
* @method	PaidMedia[] getPaidMedia() Information about the paid media
* @method	bool isPaidMedia()
* @method	$this setPaidMedia()
* @method	$this unsetPaidMedia()

*/

class PaidMediaInfo extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'star_count'=> 'int',
		'paid_media'=> 'PaidMedia[]',
	];

}