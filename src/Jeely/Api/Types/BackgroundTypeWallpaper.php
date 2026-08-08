<?php

namespace Jeely\Api\Types;

/**
 * @class BackgroundTypeWallpaper
 * @description The background is a wallpaper in the JPEG format.
 *
 * @method string getType() Type of the background, always “wallpaper”
 * @method Document getDocument() Document with the wallpaper
 * @method int getDarkThemeDimming() Dimming of the background in dark themes, as a percentage; 0-100
 * @method bool getIsBlurred() Optional. True, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12
 * @method bool getIsMoving() Optional. True, if the background moves slightly when the device is tilted
 *
 * @method bool isType()
 * @method bool isDocument()
 * @method bool isDarkThemeDimming()
 * @method bool isIsBlurred()
 * @method bool isIsMoving()
 *
 * @method $this setType()
 * @method $this setDocument()
 * @method $this setDarkThemeDimming()
 * @method $this setIsBlurred()
 * @method $this setIsMoving()
 *
 * @method $this unsetType()
 * @method $this unsetDocument()
 * @method $this unsetDarkThemeDimming()
 * @method $this unsetIsBlurred()
 * @method $this unsetIsMoving()
 *
 * @property string $type Type of the background, always “wallpaper”
 * @property Document $document Document with the wallpaper
 * @property int $dark_theme_dimming Dimming of the background in dark themes, as a percentage; 0-100
 * @property bool $is_blurred Optional. True, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12
 * @property bool $is_moving Optional. True, if the background moves slightly when the device is tilted
 *
 * @see https://core.telegram.org/bots/api#backgroundtypewallpaper
 */
class BackgroundTypeWallpaper extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'document' => 'Document',
        'dark_theme_dimming' => 'int',
        'is_blurred' => 'bool',
        'is_moving' => 'bool',
    ];
}
