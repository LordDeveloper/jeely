<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Giveaway
* @description This object represents a message about a scheduled giveaway.
*
* @property	Chat[] $chats The list of chats which the user must join to participate in the giveaway
* @method	Chat[] getChats() The list of chats which the user must join to participate in the giveaway
* @method	bool isChats()
* @method	$this setChats()
* @method	$this unsetChats()

* @property	int $winners_selection_date Point in time (Unix timestamp) when winners of the giveaway will be selected
* @method	int getWinnersSelectionDate() Point in time (Unix timestamp) when winners of the giveaway will be selected
* @method	bool isWinnersSelectionDate()
* @method	$this setWinnersSelectionDate()
* @method	$this unsetWinnersSelectionDate()

* @property	int $winner_count The number of users which are supposed to be selected as winners of the giveaway
* @method	int getWinnerCount() The number of users which are supposed to be selected as winners of the giveaway
* @method	bool isWinnerCount()
* @method	$this setWinnerCount()
* @method	$this unsetWinnerCount()

* @property	bool $only_new_members Optional. True, if only users who join the chats after the giveaway started should be eligible to win
* @method	bool getOnlyNewMembers() Optional. True, if only users who join the chats after the giveaway started should be eligible to win
* @method	bool isOnlyNewMembers()
* @method	$this setOnlyNewMembers()
* @method	$this unsetOnlyNewMembers()

* @property	bool $has_public_winners Optional. True, if the list of giveaway winners will be visible to everyone
* @method	bool getHasPublicWinners() Optional. True, if the list of giveaway winners will be visible to everyone
* @method	bool isHasPublicWinners()
* @method	$this setHasPublicWinners()
* @method	$this unsetHasPublicWinners()

* @property	string $prize_description Optional. Description of additional giveaway prize
* @method	string getPrizeDescription() Optional. Description of additional giveaway prize
* @method	bool isPrizeDescription()
* @method	$this setPrizeDescription()
* @method	$this unsetPrizeDescription()

* @property	string[] $country_codes Optional. A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which eligible users for the giveaway must come. If empty, then all users can participate in the giveaway. Users with a phone number that was bought on Fragment can always participate in giveaways.
* @method	string[] getCountryCodes() Optional. A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which eligible users for the giveaway must come. If empty, then all users can participate in the giveaway. Users with a phone number that was bought on Fragment can always participate in giveaways.
* @method	bool isCountryCodes()
* @method	$this setCountryCodes()
* @method	$this unsetCountryCodes()

* @property	int $prize_star_count Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
* @method	int getPrizeStarCount() Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
* @method	bool isPrizeStarCount()
* @method	$this setPrizeStarCount()
* @method	$this unsetPrizeStarCount()

* @property	int $premium_subscription_month_count Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
* @method	int getPremiumSubscriptionMonthCount() Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
* @method	bool isPremiumSubscriptionMonthCount()
* @method	$this setPremiumSubscriptionMonthCount()
* @method	$this unsetPremiumSubscriptionMonthCount()

*/

class Giveaway extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'chats'=> 'Chat[]',
		'winners_selection_date'=> 'int',
		'winner_count'=> 'int',
		'only_new_members'=> 'bool',
		'has_public_winners'=> 'bool',
		'prize_description'=> 'string',
		'country_codes'=> 'string[]',
		'prize_star_count'=> 'int',
		'premium_subscription_month_count'=> 'int',
	];

}