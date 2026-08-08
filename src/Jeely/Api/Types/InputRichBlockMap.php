<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockMap
 * @description A block with a map, corresponding to the custom HTML tag <tg-map>. The map's width and height must not exceed 10000 in total. The width and height ratio must be at most 20.
 *
 * @method string getType() Type of the block, always “map”
 * @method Location getLocation() Location of the center of the map
 * @method int getZoom() Map zoom level; 0-24
 * @method int getWidth() Map width; 0-10000
 * @method int getHeight() Map height; 0-10000
 * @method RichBlockCaption getCaption() Optional. Caption of the block
 *
 * @method bool isType()
 * @method bool isLocation()
 * @method bool isZoom()
 * @method bool isWidth()
 * @method bool isHeight()
 * @method bool isCaption()
 *
 * @method $this setType()
 * @method $this setLocation()
 * @method $this setZoom()
 * @method $this setWidth()
 * @method $this setHeight()
 * @method $this setCaption()
 *
 * @method $this unsetType()
 * @method $this unsetLocation()
 * @method $this unsetZoom()
 * @method $this unsetWidth()
 * @method $this unsetHeight()
 * @method $this unsetCaption()
 *
 * @property string $type Type of the block, always “map”
 * @property Location $location Location of the center of the map
 * @property int $zoom Map zoom level; 0-24
 * @property int $width Map width; 0-10000
 * @property int $height Map height; 0-10000
 * @property RichBlockCaption $caption Optional. Caption of the block
 *
 * @see https://core.telegram.org/bots/api#inputrichblockmap
 */
class InputRichBlockMap extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'location' => 'Location',
        'zoom' => 'int',
        'width' => 'int',
        'height' => 'int',
        'caption' => 'RichBlockCaption',
    ];
}
