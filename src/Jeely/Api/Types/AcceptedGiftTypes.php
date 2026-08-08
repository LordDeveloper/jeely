<?php

namespace Jeely\Api\Types;

/**
 * @class AcceptedGiftTypes
 * @description This object describes the types of gifts that can be gifted to a user or a chat.
 *
 * @method bool getUnlimitedGifts() True, if unlimited regular gifts are accepted
 * @method bool getLimitedGifts() True, if limited regular gifts are accepted
 * @method bool getUniqueGifts() True, if unique gifts or gifts that can be upgraded to unique for free are accepted
 * @method bool getPremiumSubscription() True, if a Telegram Premium subscription is accepted
 * @method bool getGiftsFromChannels() True, if transfers of unique gifts from channels are accepted
 *
 * @method bool isUnlimitedGifts()
 * @method bool isLimitedGifts()
 * @method bool isUniqueGifts()
 * @method bool isPremiumSubscription()
 * @method bool isGiftsFromChannels()
 *
 * @method $this setUnlimitedGifts()
 * @method $this setLimitedGifts()
 * @method $this setUniqueGifts()
 * @method $this setPremiumSubscription()
 * @method $this setGiftsFromChannels()
 *
 * @method $this unsetUnlimitedGifts()
 * @method $this unsetLimitedGifts()
 * @method $this unsetUniqueGifts()
 * @method $this unsetPremiumSubscription()
 * @method $this unsetGiftsFromChannels()
 *
 * @property bool $unlimited_gifts True, if unlimited regular gifts are accepted
 * @property bool $limited_gifts True, if limited regular gifts are accepted
 * @property bool $unique_gifts True, if unique gifts or gifts that can be upgraded to unique for free are accepted
 * @property bool $premium_subscription True, if a Telegram Premium subscription is accepted
 * @property bool $gifts_from_channels True, if transfers of unique gifts from channels are accepted
 *
 * @see https://core.telegram.org/bots/api#acceptedgifttypes
 */
class AcceptedGiftTypes extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'unlimited_gifts' => 'bool',
        'limited_gifts' => 'bool',
        'unique_gifts' => 'bool',
        'premium_subscription' => 'bool',
        'gifts_from_channels' => 'bool',
    ];
}
