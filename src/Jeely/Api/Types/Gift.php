<?php

namespace Jeely\Api\Types;

/**
 * @class Gift
 * @description This object represents a gift that can be sent by the bot.
 *
 * @method string getId() Unique identifier of the gift
 * @method Sticker getSticker() The sticker that represents the gift
 * @method int getStarCount() The number of Telegram Stars that must be paid to send the sticker
 * @method int getUpgradeStarCount() Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
 * @method bool getIsPremium() Optional. True, if the gift can only be purchased by Telegram Premium subscribers
 * @method bool getHasColors() Optional. True, if the gift can be used (after being upgraded) to customize a user's appearance
 * @method int getTotalCount() Optional. The total number of gifts of this type that can be sent by all users; for limited gifts only
 * @method int getRemainingCount() Optional. The number of remaining gifts of this type that can be sent by all users; for limited gifts only
 * @method int getPersonalTotalCount() Optional. The total number of gifts of this type that can be sent by the bot; for limited gifts only
 * @method int getPersonalRemainingCount() Optional. The number of remaining gifts of this type that can be sent by the bot; for limited gifts only
 * @method GiftBackground getBackground() Optional. Background of the gift
 * @method int getUniqueGiftVariantCount() Optional. The total number of different unique gifts that can be obtained by upgrading the gift
 * @method Chat getPublisherChat() Optional. Information about the chat that published the gift
 *
 * @method bool isId()
 * @method bool isSticker()
 * @method bool isStarCount()
 * @method bool isUpgradeStarCount()
 * @method bool isIsPremium()
 * @method bool isHasColors()
 * @method bool isTotalCount()
 * @method bool isRemainingCount()
 * @method bool isPersonalTotalCount()
 * @method bool isPersonalRemainingCount()
 * @method bool isBackground()
 * @method bool isUniqueGiftVariantCount()
 * @method bool isPublisherChat()
 *
 * @method $this setId()
 * @method $this setSticker()
 * @method $this setStarCount()
 * @method $this setUpgradeStarCount()
 * @method $this setIsPremium()
 * @method $this setHasColors()
 * @method $this setTotalCount()
 * @method $this setRemainingCount()
 * @method $this setPersonalTotalCount()
 * @method $this setPersonalRemainingCount()
 * @method $this setBackground()
 * @method $this setUniqueGiftVariantCount()
 * @method $this setPublisherChat()
 *
 * @method $this unsetId()
 * @method $this unsetSticker()
 * @method $this unsetStarCount()
 * @method $this unsetUpgradeStarCount()
 * @method $this unsetIsPremium()
 * @method $this unsetHasColors()
 * @method $this unsetTotalCount()
 * @method $this unsetRemainingCount()
 * @method $this unsetPersonalTotalCount()
 * @method $this unsetPersonalRemainingCount()
 * @method $this unsetBackground()
 * @method $this unsetUniqueGiftVariantCount()
 * @method $this unsetPublisherChat()
 *
 * @property string $id Unique identifier of the gift
 * @property Sticker $sticker The sticker that represents the gift
 * @property int $star_count The number of Telegram Stars that must be paid to send the sticker
 * @property int $upgrade_star_count Optional. The number of Telegram Stars that must be paid to upgrade the gift to a unique one
 * @property bool $is_premium Optional. True, if the gift can only be purchased by Telegram Premium subscribers
 * @property bool $has_colors Optional. True, if the gift can be used (after being upgraded) to customize a user's appearance
 * @property int $total_count Optional. The total number of gifts of this type that can be sent by all users; for limited gifts only
 * @property int $remaining_count Optional. The number of remaining gifts of this type that can be sent by all users; for limited gifts only
 * @property int $personal_total_count Optional. The total number of gifts of this type that can be sent by the bot; for limited gifts only
 * @property int $personal_remaining_count Optional. The number of remaining gifts of this type that can be sent by the bot; for limited gifts only
 * @property GiftBackground $background Optional. Background of the gift
 * @property int $unique_gift_variant_count Optional. The total number of different unique gifts that can be obtained by upgrading the gift
 * @property Chat $publisher_chat Optional. Information about the chat that published the gift
 *
 * @see https://core.telegram.org/bots/api#gift
 */
class Gift extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'sticker' => 'Sticker',
        'star_count' => 'int',
        'upgrade_star_count' => 'int',
        'is_premium' => 'bool',
        'has_colors' => 'bool',
        'total_count' => 'int',
        'remaining_count' => 'int',
        'personal_total_count' => 'int',
        'personal_remaining_count' => 'int',
        'background' => 'GiftBackground',
        'unique_gift_variant_count' => 'int',
        'publisher_chat' => 'Chat',
    ];
}
