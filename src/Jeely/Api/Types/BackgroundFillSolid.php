<?php

namespace Jeely\Api\Types;

/**
 * @class BackgroundFillSolid
 * @description The background is filled using the selected color.
 *
 * @method string getType() Type of the background fill, always “solid”
 * @method int getColor() The color of the background fill in the RGB24 format
 *
 * @method bool isType()
 * @method bool isColor()
 *
 * @method $this setType()
 * @method $this setColor()
 *
 * @method $this unsetType()
 * @method $this unsetColor()
 *
 * @property string $type Type of the background fill, always “solid”
 * @property int $color The color of the background fill in the RGB24 format
 *
 * @see https://core.telegram.org/bots/api#backgroundfillsolid
 */
class BackgroundFillSolid extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'color' => 'int',
    ];
}
