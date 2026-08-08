<?php

namespace Jeely\Api\Types;

/**
 * @class UniqueGiftBackdropColors
 * @description This object describes the colors of the backdrop of a unique gift.
 *
 * @method int getCenterColor() The color in the center of the backdrop in RGB format
 * @method int getEdgeColor() The color on the edges of the backdrop in RGB format
 * @method int getSymbolColor() The color to be applied to the symbol in RGB format
 * @method int getTextColor() The color for the text on the backdrop in RGB format
 *
 * @method bool isCenterColor()
 * @method bool isEdgeColor()
 * @method bool isSymbolColor()
 * @method bool isTextColor()
 *
 * @method $this setCenterColor()
 * @method $this setEdgeColor()
 * @method $this setSymbolColor()
 * @method $this setTextColor()
 *
 * @method $this unsetCenterColor()
 * @method $this unsetEdgeColor()
 * @method $this unsetSymbolColor()
 * @method $this unsetTextColor()
 *
 * @property int $center_color The color in the center of the backdrop in RGB format
 * @property int $edge_color The color on the edges of the backdrop in RGB format
 * @property int $symbol_color The color to be applied to the symbol in RGB format
 * @property int $text_color The color for the text on the backdrop in RGB format
 *
 * @see https://core.telegram.org/bots/api#uniquegiftbackdropcolors
 */
class UniqueGiftBackdropColors extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'center_color' => 'int',
        'edge_color' => 'int',
        'symbol_color' => 'int',
        'text_color' => 'int',
    ];
}
