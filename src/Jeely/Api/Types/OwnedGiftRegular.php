<?php

namespace Jeely\Api\Types;

/**
 * @class OwnedGiftRegular
 * @description Describes a regular gift owned by a user or a chat.
 *
 * @method string getType() Type of the gift, always “regular”
 * @method Gift getGift() Information about the regular gift
 * @method string getOwnedGiftId() Optional. Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only
 * @method User getSenderUser() Optional. Sender of the gift if it is a known user
 * @method int getSendDate() Date the gift was sent in Unix time
 * @method string getText() Optional. Text of the message that was added to the gift
 * @method MessageEntity[] getEntities() Optional. Special entities that appear in the text
 * @method bool getIsPrivate() Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
 * @method bool getIsSaved() Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
 * @method bool getCanBeUpgraded() Optional. True, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only
 * @method bool getWasRefunded() Optional. True, if the gift was refunded and isn't available anymore
 * @method int getConvertStarCount() Optional. Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot be converted to Telegram Stars; for gifts received on behalf of business accounts only
 * @method int getPrepaidUpgradeStarCount() Optional. Number of Telegram Stars that were paid for the ability to upgrade the gift
 * @method bool getIsUpgradeSeparate() Optional. True, if the gift's upgrade was purchased after the gift was sent; for gifts received on behalf of business accounts only
 * @method int getUniqueGiftNumber() Optional. Unique number reserved for this gift when upgraded. See the number field in UniqueGift.
 *
 * @method bool isType()
 * @method bool isGift()
 * @method bool isOwnedGiftId()
 * @method bool isSenderUser()
 * @method bool isSendDate()
 * @method bool isText()
 * @method bool isEntities()
 * @method bool isIsPrivate()
 * @method bool isIsSaved()
 * @method bool isCanBeUpgraded()
 * @method bool isWasRefunded()
 * @method bool isConvertStarCount()
 * @method bool isPrepaidUpgradeStarCount()
 * @method bool isIsUpgradeSeparate()
 * @method bool isUniqueGiftNumber()
 *
 * @method $this setType()
 * @method $this setGift()
 * @method $this setOwnedGiftId()
 * @method $this setSenderUser()
 * @method $this setSendDate()
 * @method $this setText()
 * @method $this setEntities()
 * @method $this setIsPrivate()
 * @method $this setIsSaved()
 * @method $this setCanBeUpgraded()
 * @method $this setWasRefunded()
 * @method $this setConvertStarCount()
 * @method $this setPrepaidUpgradeStarCount()
 * @method $this setIsUpgradeSeparate()
 * @method $this setUniqueGiftNumber()
 *
 * @method $this unsetType()
 * @method $this unsetGift()
 * @method $this unsetOwnedGiftId()
 * @method $this unsetSenderUser()
 * @method $this unsetSendDate()
 * @method $this unsetText()
 * @method $this unsetEntities()
 * @method $this unsetIsPrivate()
 * @method $this unsetIsSaved()
 * @method $this unsetCanBeUpgraded()
 * @method $this unsetWasRefunded()
 * @method $this unsetConvertStarCount()
 * @method $this unsetPrepaidUpgradeStarCount()
 * @method $this unsetIsUpgradeSeparate()
 * @method $this unsetUniqueGiftNumber()
 *
 * @property string $type Type of the gift, always “regular”
 * @property Gift $gift Information about the regular gift
 * @property string $owned_gift_id Optional. Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only
 * @property User $sender_user Optional. Sender of the gift if it is a known user
 * @property int $send_date Date the gift was sent in Unix time
 * @property string $text Optional. Text of the message that was added to the gift
 * @property MessageEntity[] $entities Optional. Special entities that appear in the text
 * @property bool $is_private Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
 * @property bool $is_saved Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
 * @property bool $can_be_upgraded Optional. True, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only
 * @property bool $was_refunded Optional. True, if the gift was refunded and isn't available anymore
 * @property int $convert_star_count Optional. Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot be converted to Telegram Stars; for gifts received on behalf of business accounts only
 * @property int $prepaid_upgrade_star_count Optional. Number of Telegram Stars that were paid for the ability to upgrade the gift
 * @property bool $is_upgrade_separate Optional. True, if the gift's upgrade was purchased after the gift was sent; for gifts received on behalf of business accounts only
 * @property int $unique_gift_number Optional. Unique number reserved for this gift when upgraded. See the number field in UniqueGift.
 *
 * @see https://core.telegram.org/bots/api#ownedgiftregular
 */
class OwnedGiftRegular extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'gift' => 'Gift',
        'owned_gift_id' => 'string',
        'sender_user' => 'User',
        'send_date' => 'int',
        'text' => 'string',
        'entities' => 'MessageEntity[]',
        'is_private' => 'bool',
        'is_saved' => 'bool',
        'can_be_upgraded' => 'bool',
        'was_refunded' => 'bool',
        'convert_star_count' => 'int',
        'prepaid_upgrade_star_count' => 'int',
        'is_upgrade_separate' => 'bool',
        'unique_gift_number' => 'int',
    ];
}
