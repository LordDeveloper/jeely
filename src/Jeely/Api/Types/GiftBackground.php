<?php

namespace Jeely\Api\Types;

/**
 * @class GiftBackground
 * @description This object describes the background of a gift.
 *
 * @method int getCenterColor() Center color of the background in RGB format
 * @method int getEdgeColor() Edge color of the background in RGB format
 * @method int getTextColor() Text color of the background in RGB format
 *
 * @method bool isCenterColor()
 * @method bool isEdgeColor()
 * @method bool isTextColor()
 *
 * @method $this setCenterColor()
 * @method $this setEdgeColor()
 * @method $this setTextColor()
 *
 * @method $this unsetCenterColor()
 * @method $this unsetEdgeColor()
 * @method $this unsetTextColor()
 *
 * @property int $center_color Center color of the background in RGB format
 * @property int $edge_color Edge color of the background in RGB format
 * @property int $text_color Text color of the background in RGB format
 *
 * @see https://core.telegram.org/bots/api#giftbackground
 */
class GiftBackground extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'center_color' => 'int',
        'edge_color' => 'int',
        'text_color' => 'int',
    ];
}
