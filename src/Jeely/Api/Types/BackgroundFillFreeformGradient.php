<?php

namespace Jeely\Api\Types;

/**
 * @class BackgroundFillFreeformGradient
 * @description The background is a freeform gradient that rotates after every message in the chat.
 *
 * @method string getType() Type of the background fill, always “freeform_gradient”
 * @method int[] getColors() A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format
 *
 * @method bool isType()
 * @method bool isColors()
 *
 * @method $this setType()
 * @method $this setColors()
 *
 * @method $this unsetType()
 * @method $this unsetColors()
 *
 * @property string $type Type of the background fill, always “freeform_gradient”
 * @property int[] $colors A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format
 *
 * @see https://core.telegram.org/bots/api#backgroundfillfreeformgradient
 */
class BackgroundFillFreeformGradient extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'colors' => 'int[]',
    ];
}
