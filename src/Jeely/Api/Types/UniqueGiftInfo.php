<?php

namespace Jeely\Api\Types;

/**
 * @class UniqueGiftInfo
 * @description Describes a service message about a unique gift that was sent or received.
 *
 * @method UniqueGift getGift() Information about the gift
 * @method string getOrigin() Origin of the gift. Currently, either “upgrade” for gifts upgraded from regular gifts, “transfer” for gifts transferred from other users or channels, “resale” for gifts bought from other users, “gifted_upgrade” for upgrades purchased after the gift was sent, or “offer” for gifts bought or sold through gift purchase offers.
 * @method string getLastResaleCurrency() Optional. For gifts bought from other users, the currency in which the payment for the gift was done. Currently, one of “XTR” for Telegram Stars or “TON” for TON grams.
 * @method int getLastResaleAmount() Optional. For gifts bought from other users, the price paid for the gift in either Telegram Stars or nanograms
 * @method string getOwnedGiftId() Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
 * @method int getTransferStarCount() Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
 * @method int getNextTransferDate() Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now.
 *
 * @method bool isGift()
 * @method bool isOrigin()
 * @method bool isLastResaleCurrency()
 * @method bool isLastResaleAmount()
 * @method bool isOwnedGiftId()
 * @method bool isTransferStarCount()
 * @method bool isNextTransferDate()
 *
 * @method $this setGift()
 * @method $this setOrigin()
 * @method $this setLastResaleCurrency()
 * @method $this setLastResaleAmount()
 * @method $this setOwnedGiftId()
 * @method $this setTransferStarCount()
 * @method $this setNextTransferDate()
 *
 * @method $this unsetGift()
 * @method $this unsetOrigin()
 * @method $this unsetLastResaleCurrency()
 * @method $this unsetLastResaleAmount()
 * @method $this unsetOwnedGiftId()
 * @method $this unsetTransferStarCount()
 * @method $this unsetNextTransferDate()
 *
 * @property UniqueGift $gift Information about the gift
 * @property string $origin Origin of the gift. Currently, either “upgrade” for gifts upgraded from regular gifts, “transfer” for gifts transferred from other users or channels, “resale” for gifts bought from other users, “gifted_upgrade” for upgrades purchased after the gift was sent, or “offer” for gifts bought or sold through gift purchase offers.
 * @property string $last_resale_currency Optional. For gifts bought from other users, the currency in which the payment for the gift was done. Currently, one of “XTR” for Telegram Stars or “TON” for TON grams.
 * @property int $last_resale_amount Optional. For gifts bought from other users, the price paid for the gift in either Telegram Stars or nanograms
 * @property string $owned_gift_id Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
 * @property int $transfer_star_count Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
 * @property int $next_transfer_date Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now.
 *
 * @see https://core.telegram.org/bots/api#uniquegiftinfo
 */
class UniqueGiftInfo extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'gift' => 'UniqueGift',
        'origin' => 'string',
        'last_resale_currency' => 'string',
        'last_resale_amount' => 'int',
        'owned_gift_id' => 'string',
        'transfer_star_count' => 'int',
        'next_transfer_date' => 'int',
    ];
}
