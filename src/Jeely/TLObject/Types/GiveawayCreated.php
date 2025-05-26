<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class GiveawayCreated
* @description This object represents a service message about the creation of a scheduled giveaway.
*
* @property	int $prize_star_count Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
* @method	int getPrizeStarCount() Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
* @method	bool isPrizeStarCount()
* @method	$this setPrizeStarCount()
* @method	$this unsetPrizeStarCount()

*/

class GiveawayCreated extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'prize_star_count'=> 'int',
	];

}