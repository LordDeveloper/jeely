<?php

namespace Jeely\Api\Types;

/**
 * @class UniqueGiftSymbol
 * @description This object describes the symbol shown on the pattern of a unique gift.
 *
 * @method string getName() Name of the symbol
 * @method Sticker getSticker() The sticker that represents the unique gift
 * @method int getRarityPerMille() The number of unique gifts that receive this model for every 1000 gifts upgraded
 *
 * @method bool isName()
 * @method bool isSticker()
 * @method bool isRarityPerMille()
 *
 * @method $this setName()
 * @method $this setSticker()
 * @method $this setRarityPerMille()
 *
 * @method $this unsetName()
 * @method $this unsetSticker()
 * @method $this unsetRarityPerMille()
 *
 * @property string $name Name of the symbol
 * @property Sticker $sticker The sticker that represents the unique gift
 * @property int $rarity_per_mille The number of unique gifts that receive this model for every 1000 gifts upgraded
 *
 * @see https://core.telegram.org/bots/api#uniquegiftsymbol
 */
class UniqueGiftSymbol extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'name' => 'string',
        'sticker' => 'Sticker',
        'rarity_per_mille' => 'int',
    ];
}
