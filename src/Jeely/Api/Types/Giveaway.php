<?php

namespace Jeely\Api\Types;

/**
 * @class Giveaway
 * @description This object represents a message about a scheduled giveaway.
 *
 * @method Chat[] getChats() The list of chats which the user must join to participate in the giveaway
 * @method int getWinnersSelectionDate() Point in time (Unix timestamp) when winners of the giveaway will be selected
 * @method int getWinnerCount() The number of users which are supposed to be selected as winners of the giveaway
 * @method bool getOnlyNewMembers() Optional. True, if only users who join the chats after the giveaway started should be eligible to win
 * @method bool getHasPublicWinners() Optional. True, if the list of giveaway winners will be visible to everyone
 * @method string getPrizeDescription() Optional. Description of additional giveaway prize
 * @method string[] getCountryCodes() Optional. A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which eligible users for the giveaway must come. If empty, then all users can participate in the giveaway. Users with a phone number that was bought on Fragment can always participate in giveaways.
 * @method int getPrizeStarCount() Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
 * @method int getPremiumSubscriptionMonthCount() Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
 *
 * @method bool isChats()
 * @method bool isWinnersSelectionDate()
 * @method bool isWinnerCount()
 * @method bool isOnlyNewMembers()
 * @method bool isHasPublicWinners()
 * @method bool isPrizeDescription()
 * @method bool isCountryCodes()
 * @method bool isPrizeStarCount()
 * @method bool isPremiumSubscriptionMonthCount()
 *
 * @method $this setChats()
 * @method $this setWinnersSelectionDate()
 * @method $this setWinnerCount()
 * @method $this setOnlyNewMembers()
 * @method $this setHasPublicWinners()
 * @method $this setPrizeDescription()
 * @method $this setCountryCodes()
 * @method $this setPrizeStarCount()
 * @method $this setPremiumSubscriptionMonthCount()
 *
 * @method $this unsetChats()
 * @method $this unsetWinnersSelectionDate()
 * @method $this unsetWinnerCount()
 * @method $this unsetOnlyNewMembers()
 * @method $this unsetHasPublicWinners()
 * @method $this unsetPrizeDescription()
 * @method $this unsetCountryCodes()
 * @method $this unsetPrizeStarCount()
 * @method $this unsetPremiumSubscriptionMonthCount()
 *
 * @property Chat[] $chats The list of chats which the user must join to participate in the giveaway
 * @property int $winners_selection_date Point in time (Unix timestamp) when winners of the giveaway will be selected
 * @property int $winner_count The number of users which are supposed to be selected as winners of the giveaway
 * @property bool $only_new_members Optional. True, if only users who join the chats after the giveaway started should be eligible to win
 * @property bool $has_public_winners Optional. True, if the list of giveaway winners will be visible to everyone
 * @property string $prize_description Optional. Description of additional giveaway prize
 * @property string[] $country_codes Optional. A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which eligible users for the giveaway must come. If empty, then all users can participate in the giveaway. Users with a phone number that was bought on Fragment can always participate in giveaways.
 * @property int $prize_star_count Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
 * @property int $premium_subscription_month_count Optional. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only
 *
 * @see https://core.telegram.org/bots/api#giveaway
 */
class Giveaway extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'chats' => 'Chat[]',
        'winners_selection_date' => 'int',
        'winner_count' => 'int',
        'only_new_members' => 'bool',
        'has_public_winners' => 'bool',
        'prize_description' => 'string',
        'country_codes' => 'string[]',
        'prize_star_count' => 'int',
        'premium_subscription_month_count' => 'int',
    ];
}
