<?php

namespace Jeely\Api\Types;

/**
 * @class UniqueGiftModel
 * @description This object describes the model of a unique gift.
 *
 * @method string getName() Name of the model
 * @method Sticker getSticker() The sticker that represents the unique gift
 * @method int getRarityPerMille() The number of unique gifts that receive this model for every 1000 gift upgrades. Always 0 for crafted gifts.
 * @method string getRarity() Optional. Rarity of the model if it is a crafted model. Currently, can be “uncommon”, “rare”, “epic”, or “legendary”.
 *
 * @method bool isName()
 * @method bool isSticker()
 * @method bool isRarityPerMille()
 * @method bool isRarity()
 *
 * @method $this setName()
 * @method $this setSticker()
 * @method $this setRarityPerMille()
 * @method $this setRarity()
 *
 * @method $this unsetName()
 * @method $this unsetSticker()
 * @method $this unsetRarityPerMille()
 * @method $this unsetRarity()
 *
 * @property string $name Name of the model
 * @property Sticker $sticker The sticker that represents the unique gift
 * @property int $rarity_per_mille The number of unique gifts that receive this model for every 1000 gift upgrades. Always 0 for crafted gifts.
 * @property string $rarity Optional. Rarity of the model if it is a crafted model. Currently, can be “uncommon”, “rare”, “epic”, or “legendary”.
 *
 * @see https://core.telegram.org/bots/api#uniquegiftmodel
 */
class UniqueGiftModel extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'name' => 'string',
        'sticker' => 'Sticker',
        'rarity_per_mille' => 'int',
        'rarity' => 'string',
    ];
}
