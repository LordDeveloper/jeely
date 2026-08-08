<?php

namespace Jeely\Api\Types;

/**
 * @class OwnedGiftUnique
 * @description Describes a unique gift received and owned by a user or a chat.
 *
 * @method string getType() Type of the gift, always “unique”
 * @method UniqueGift getGift() Information about the unique gift
 * @method string getOwnedGiftId() Optional. Unique identifier of the received gift for the bot; for gifts received on behalf of business accounts only
 * @method User getSenderUser() Optional. Sender of the gift if it is a known user
 * @method int getSendDate() Date the gift was sent in Unix time
 * @method bool getIsSaved() Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
 * @method bool getCanBeTransferred() Optional. True, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only
 * @method int getTransferStarCount() Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
 * @method int getNextTransferDate() Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now.
 *
 * @method bool isType()
 * @method bool isGift()
 * @method bool isOwnedGiftId()
 * @method bool isSenderUser()
 * @method bool isSendDate()
 * @method bool isIsSaved()
 * @method bool isCanBeTransferred()
 * @method bool isTransferStarCount()
 * @method bool isNextTransferDate()
 *
 * @method $this setType()
 * @method $this setGift()
 * @method $this setOwnedGiftId()
 * @method $this setSenderUser()
 * @method $this setSendDate()
 * @method $this setIsSaved()
 * @method $this setCanBeTransferred()
 * @method $this setTransferStarCount()
 * @method $this setNextTransferDate()
 *
 * @method $this unsetType()
 * @method $this unsetGift()
 * @method $this unsetOwnedGiftId()
 * @method $this unsetSenderUser()
 * @method $this unsetSendDate()
 * @method $this unsetIsSaved()
 * @method $this unsetCanBeTransferred()
 * @method $this unsetTransferStarCount()
 * @method $this unsetNextTransferDate()
 *
 * @property string $type Type of the gift, always “unique”
 * @property UniqueGift $gift Information about the unique gift
 * @property string $owned_gift_id Optional. Unique identifier of the received gift for the bot; for gifts received on behalf of business accounts only
 * @property User $sender_user Optional. Sender of the gift if it is a known user
 * @property int $send_date Date the gift was sent in Unix time
 * @property bool $is_saved Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
 * @property bool $can_be_transferred Optional. True, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only
 * @property int $transfer_star_count Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
 * @property int $next_transfer_date Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now.
 *
 * @see https://core.telegram.org/bots/api#ownedgiftunique
 */
class OwnedGiftUnique extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'gift' => 'UniqueGift',
        'owned_gift_id' => 'string',
        'sender_user' => 'User',
        'send_date' => 'int',
        'is_saved' => 'bool',
        'can_be_transferred' => 'bool',
        'transfer_star_count' => 'int',
        'next_transfer_date' => 'int',
    ];
}
