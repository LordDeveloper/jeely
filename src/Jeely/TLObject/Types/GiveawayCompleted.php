<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class GiveawayCompleted
* @description This object represents a service message about the completion of a giveaway without public winners.
*
* @property	int $winner_count Number of winners in the giveaway
* @method	int getWinnerCount() Number of winners in the giveaway
* @method	bool isWinnerCount()
* @method	$this setWinnerCount()
* @method	$this unsetWinnerCount()

* @property	int $unclaimed_prize_count Optional. Number of undistributed prizes
* @method	int getUnclaimedPrizeCount() Optional. Number of undistributed prizes
* @method	bool isUnclaimedPrizeCount()
* @method	$this setUnclaimedPrizeCount()
* @method	$this unsetUnclaimedPrizeCount()

* @property	Message $giveaway_message Optional. Message with the giveaway that was completed, if it wasn't deleted
* @method	Message getGiveawayMessage() Optional. Message with the giveaway that was completed, if it wasn't deleted
* @method	bool isGiveawayMessage()
* @method	$this setGiveawayMessage()
* @method	$this unsetGiveawayMessage()

* @property	bool $is_star_giveaway Optional. True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.
* @method	bool getIsStarGiveaway() Optional. True, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.
* @method	bool isIsStarGiveaway()
* @method	$this setIsStarGiveaway()
* @method	$this unsetIsStarGiveaway()

*/

class GiveawayCompleted extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'winner_count'=> 'int',
		'unclaimed_prize_count'=> 'int',
		'giveaway_message'=> 'Message',
		'is_star_giveaway'=> 'bool',
	];

}