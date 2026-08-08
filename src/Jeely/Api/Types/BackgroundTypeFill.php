<?php

namespace Jeely\Api\Types;

/**
 * @class BackgroundTypeFill
 * @description The background is automatically filled based on the selected colors.
 *
 * @method string getType() Type of the background, always “fill”
 * @method BackgroundFill getFill() The background fill
 * @method int getDarkThemeDimming() Dimming of the background in dark themes, as a percentage; 0-100
 *
 * @method bool isType()
 * @method bool isFill()
 * @method bool isDarkThemeDimming()
 *
 * @method $this setType()
 * @method $this setFill()
 * @method $this setDarkThemeDimming()
 *
 * @method $this unsetType()
 * @method $this unsetFill()
 * @method $this unsetDarkThemeDimming()
 *
 * @property string $type Type of the background, always “fill”
 * @property BackgroundFill $fill The background fill
 * @property int $dark_theme_dimming Dimming of the background in dark themes, as a percentage; 0-100
 *
 * @see https://core.telegram.org/bots/api#backgroundtypefill
 */
class BackgroundTypeFill extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'fill' => 'BackgroundFill',
        'dark_theme_dimming' => 'int',
    ];
}
