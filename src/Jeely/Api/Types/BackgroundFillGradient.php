<?php

namespace Jeely\Api\Types;

/**
 * @class BackgroundFillGradient
 * @description The background is a gradient fill.
 *
 * @method string getType() Type of the background fill, always “gradient”
 * @method int getTopColor() Top color of the gradient in the RGB24 format
 * @method int getBottomColor() Bottom color of the gradient in the RGB24 format
 * @method int getRotationAngle() Clockwise rotation angle of the background fill in degrees; 0-359
 *
 * @method bool isType()
 * @method bool isTopColor()
 * @method bool isBottomColor()
 * @method bool isRotationAngle()
 *
 * @method $this setType()
 * @method $this setTopColor()
 * @method $this setBottomColor()
 * @method $this setRotationAngle()
 *
 * @method $this unsetType()
 * @method $this unsetTopColor()
 * @method $this unsetBottomColor()
 * @method $this unsetRotationAngle()
 *
 * @property string $type Type of the background fill, always “gradient”
 * @property int $top_color Top color of the gradient in the RGB24 format
 * @property int $bottom_color Bottom color of the gradient in the RGB24 format
 * @property int $rotation_angle Clockwise rotation angle of the background fill in degrees; 0-359
 *
 * @see https://core.telegram.org/bots/api#backgroundfillgradient
 */
class BackgroundFillGradient extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'top_color' => 'int',
        'bottom_color' => 'int',
        'rotation_angle' => 'int',
    ];
}
