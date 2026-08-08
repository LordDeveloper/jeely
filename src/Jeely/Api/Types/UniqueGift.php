<?php

namespace Jeely\Api\Types;

/**
 * @class UniqueGift
 * @description This object describes a unique gift that was upgraded from a regular gift.
 *
 * @method string getGiftId() Identifier of the regular gift from which the gift was upgraded
 * @method string getBaseName() Human-readable name of the regular gift from which this unique gift was upgraded
 * @method string getName() Unique name of the gift. This name can be used in https://t.me/nft/... links and story areas.
 * @method int getNumber() Unique number of the upgraded gift among gifts upgraded from the same regular gift
 * @method UniqueGiftModel getModel() Model of the gift
 * @method UniqueGiftSymbol getSymbol() Symbol of the gift
 * @method UniqueGiftBackdrop getBackdrop() Backdrop of the gift
 * @method bool getIsPremium() Optional. True, if the original regular gift was exclusively purchaseable by Telegram Premium subscribers
 * @method bool getIsBurned() Optional. True, if the gift was used to craft another gift and isn't available anymore
 * @method bool getIsFromBlockchain() Optional. True, if the gift is assigned from the TON blockchain and can't be resold or transferred in Telegram
 * @method UniqueGiftColors getColors() Optional. The color scheme that can be used by the gift's owner for the chat's name, replies to messages and link previews; for business account gifts and gifts that are currently on sale only
 * @method Chat getPublisherChat() Optional. Information about the chat that published the gift
 *
 * @method bool isGiftId()
 * @method bool isBaseName()
 * @method bool isName()
 * @method bool isNumber()
 * @method bool isModel()
 * @method bool isSymbol()
 * @method bool isBackdrop()
 * @method bool isIsPremium()
 * @method bool isIsBurned()
 * @method bool isIsFromBlockchain()
 * @method bool isColors()
 * @method bool isPublisherChat()
 *
 * @method $this setGiftId()
 * @method $this setBaseName()
 * @method $this setName()
 * @method $this setNumber()
 * @method $this setModel()
 * @method $this setSymbol()
 * @method $this setBackdrop()
 * @method $this setIsPremium()
 * @method $this setIsBurned()
 * @method $this setIsFromBlockchain()
 * @method $this setColors()
 * @method $this setPublisherChat()
 *
 * @method $this unsetGiftId()
 * @method $this unsetBaseName()
 * @method $this unsetName()
 * @method $this unsetNumber()
 * @method $this unsetModel()
 * @method $this unsetSymbol()
 * @method $this unsetBackdrop()
 * @method $this unsetIsPremium()
 * @method $this unsetIsBurned()
 * @method $this unsetIsFromBlockchain()
 * @method $this unsetColors()
 * @method $this unsetPublisherChat()
 *
 * @property string $gift_id Identifier of the regular gift from which the gift was upgraded
 * @property string $base_name Human-readable name of the regular gift from which this unique gift was upgraded
 * @property string $name Unique name of the gift. This name can be used in https://t.me/nft/... links and story areas.
 * @property int $number Unique number of the upgraded gift among gifts upgraded from the same regular gift
 * @property UniqueGiftModel $model Model of the gift
 * @property UniqueGiftSymbol $symbol Symbol of the gift
 * @property UniqueGiftBackdrop $backdrop Backdrop of the gift
 * @property bool $is_premium Optional. True, if the original regular gift was exclusively purchaseable by Telegram Premium subscribers
 * @property bool $is_burned Optional. True, if the gift was used to craft another gift and isn't available anymore
 * @property bool $is_from_blockchain Optional. True, if the gift is assigned from the TON blockchain and can't be resold or transferred in Telegram
 * @property UniqueGiftColors $colors Optional. The color scheme that can be used by the gift's owner for the chat's name, replies to messages and link previews; for business account gifts and gifts that are currently on sale only
 * @property Chat $publisher_chat Optional. Information about the chat that published the gift
 *
 * @see https://core.telegram.org/bots/api#uniquegift
 */
class UniqueGift extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'gift_id' => 'string',
        'base_name' => 'string',
        'name' => 'string',
        'number' => 'int',
        'model' => 'UniqueGiftModel',
        'symbol' => 'UniqueGiftSymbol',
        'backdrop' => 'UniqueGiftBackdrop',
        'is_premium' => 'bool',
        'is_burned' => 'bool',
        'is_from_blockchain' => 'bool',
        'colors' => 'UniqueGiftColors',
        'publisher_chat' => 'Chat',
    ];
}
