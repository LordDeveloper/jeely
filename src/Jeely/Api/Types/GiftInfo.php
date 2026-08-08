<?php

namespace Jeely\Api\Types;

/**
 * @class GiftInfo
 * @description Describes a service message about a regular gift that was sent or received.
 *
 * @method Gift getGift() Information about the gift
 * @method string getOwnedGiftId() Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
 * @method int getConvertStarCount() Optional. Number of Telegram Stars that can be claimed by the receiver by converting the gift; omitted if conversion to Telegram Stars is impossible
 * @method int getPrepaidUpgradeStarCount() Optional. Number of Telegram Stars that were prepaid for the ability to upgrade the gift
 * @method bool getIsUpgradeSeparate() Optional. True, if the gift's upgrade was purchased after the gift was sent
 * @method bool getCanBeUpgraded() Optional. True, if the gift can be upgraded to a unique gift
 * @method string getText() Optional. Text of the message that was added to the gift
 * @method MessageEntity[] getEntities() Optional. Special entities that appear in the text
 * @method bool getIsPrivate() Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
 * @method int getUniqueGiftNumber() Optional. Unique number reserved for this gift when upgraded. See the number field in UniqueGift.
 *
 * @method bool isGift()
 * @method bool isOwnedGiftId()
 * @method bool isConvertStarCount()
 * @method bool isPrepaidUpgradeStarCount()
 * @method bool isIsUpgradeSeparate()
 * @method bool isCanBeUpgraded()
 * @method bool isText()
 * @method bool isEntities()
 * @method bool isIsPrivate()
 * @method bool isUniqueGiftNumber()
 *
 * @method $this setGift()
 * @method $this setOwnedGiftId()
 * @method $this setConvertStarCount()
 * @method $this setPrepaidUpgradeStarCount()
 * @method $this setIsUpgradeSeparate()
 * @method $this setCanBeUpgraded()
 * @method $this setText()
 * @method $this setEntities()
 * @method $this setIsPrivate()
 * @method $this setUniqueGiftNumber()
 *
 * @method $this unsetGift()
 * @method $this unsetOwnedGiftId()
 * @method $this unsetConvertStarCount()
 * @method $this unsetPrepaidUpgradeStarCount()
 * @method $this unsetIsUpgradeSeparate()
 * @method $this unsetCanBeUpgraded()
 * @method $this unsetText()
 * @method $this unsetEntities()
 * @method $this unsetIsPrivate()
 * @method $this unsetUniqueGiftNumber()
 *
 * @property Gift $gift Information about the gift
 * @property string $owned_gift_id Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
 * @property int $convert_star_count Optional. Number of Telegram Stars that can be claimed by the receiver by converting the gift; omitted if conversion to Telegram Stars is impossible
 * @property int $prepaid_upgrade_star_count Optional. Number of Telegram Stars that were prepaid for the ability to upgrade the gift
 * @property bool $is_upgrade_separate Optional. True, if the gift's upgrade was purchased after the gift was sent
 * @property bool $can_be_upgraded Optional. True, if the gift can be upgraded to a unique gift
 * @property string $text Optional. Text of the message that was added to the gift
 * @property MessageEntity[] $entities Optional. Special entities that appear in the text
 * @property bool $is_private Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
 * @property int $unique_gift_number Optional. Unique number reserved for this gift when upgraded. See the number field in UniqueGift.
 *
 * @see https://core.telegram.org/bots/api#giftinfo
 */
class GiftInfo extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'gift' => 'Gift',
        'owned_gift_id' => 'string',
        'convert_star_count' => 'int',
        'prepaid_upgrade_star_count' => 'int',
        'is_upgrade_separate' => 'bool',
        'can_be_upgraded' => 'bool',
        'text' => 'string',
        'entities' => 'MessageEntity[]',
        'is_private' => 'bool',
        'unique_gift_number' => 'int',
    ];
}
