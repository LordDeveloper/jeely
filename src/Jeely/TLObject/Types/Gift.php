<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Gift
* @description This object represents a gift that can be sent by the bot.
*
* @property	string $id Unique identifier of the gift
* @method	string getId() Unique identifier of the gift
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	Sticker $sticker The sticker that represents the gift
* @method	Sticker getSticker() The sticker that represents the gift
* @method	bool isSticker()
* @method	$this setSticker()
* @method	$this unsetSticker()

* @property	int $star_count The number of Telegram Stars that must be paid to send the sticker
* @method	int getStarCount() The number of Telegram Stars that must be paid to send the sticker
* @method	bool isStarCount()
* @method	$this setStarCount()
* @method	$this unsetStarCount()

* @property	int $upgrade_star_count Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
* @method	int getUpgradeStarCount() Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
* @method	bool isUpgradeStarCount()
* @method	$this setUpgradeStarCount()
* @method	$this unsetUpgradeStarCount()

* @property	int $total_count Optional. The total number of the gifts of this type that can be sent; for limited gifts only
* @method	int getTotalCount() Optional. The total number of the gifts of this type that can be sent; for limited gifts only
* @method	bool isTotalCount()
* @method	$this setTotalCount()
* @method	$this unsetTotalCount()

* @property	int $remaining_count Optional. The number of remaining gifts of this type that can be sent; for limited gifts only
* @method	int getRemainingCount() Optional. The number of remaining gifts of this type that can be sent; for limited gifts only
* @method	bool isRemainingCount()
* @method	$this setRemainingCount()
* @method	$this unsetRemainingCount()

*/

class Gift extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'id'=> 'string',
		'sticker'=> 'Sticker',
		'star_count'=> 'int',
		'upgrade_star_count'=> 'int',
		'total_count'=> 'int',
		'remaining_count'=> 'int',
	];

}