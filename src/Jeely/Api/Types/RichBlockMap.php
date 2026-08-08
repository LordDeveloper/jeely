<?php

namespace Jeely\Api\Types;

/**
 * @class RichBlockMap
 * @description A block with a map, corresponding to the custom HTML tag <tg-map>.
 *
 * @method string getType() Type of the block, always “map”
 * @method Location getLocation() Location of the center of the map
 * @method int getZoom() Map zoom level; 13-20
 * @method int getWidth() Expected width of the map
 * @method int getHeight() Expected height of the map
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
 * @property int $zoom Map zoom level; 13-20
 * @property int $width Expected width of the map
 * @property int $height Expected height of the map
 * @property RichBlockCaption $caption Optional. Caption of the block
 *
 * @see https://core.telegram.org/bots/api#richblockmap
 */
class RichBlockMap extends \Jeely\Nectar
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
