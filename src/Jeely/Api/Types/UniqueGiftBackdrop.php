<?php

namespace Jeely\Api\Types;

/**
 * @class UniqueGiftBackdrop
 * @description This object describes the backdrop of a unique gift.
 *
 * @method string getName() Name of the backdrop
 * @method UniqueGiftBackdropColors getColors() Colors of the backdrop
 * @method int getRarityPerMille() The number of unique gifts that receive this backdrop for every 1000 gifts upgraded
 *
 * @method bool isName()
 * @method bool isColors()
 * @method bool isRarityPerMille()
 *
 * @method $this setName()
 * @method $this setColors()
 * @method $this setRarityPerMille()
 *
 * @method $this unsetName()
 * @method $this unsetColors()
 * @method $this unsetRarityPerMille()
 *
 * @property string $name Name of the backdrop
 * @property UniqueGiftBackdropColors $colors Colors of the backdrop
 * @property int $rarity_per_mille The number of unique gifts that receive this backdrop for every 1000 gifts upgraded
 *
 * @see https://core.telegram.org/bots/api#uniquegiftbackdrop
 */
class UniqueGiftBackdrop extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'name' => 'string',
        'colors' => 'UniqueGiftBackdropColors',
        'rarity_per_mille' => 'int',
    ];
}
