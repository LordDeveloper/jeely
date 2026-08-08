<?php

namespace Jeely\Api\Types;

/**
 * @class StoryAreaPosition
 * @description Describes the position of a clickable area within a story.
 *
 * @method float getXPercentage() The abscissa of the area's center, as a percentage of the media width
 * @method float getYPercentage() The ordinate of the area's center, as a percentage of the media height
 * @method float getWidthPercentage() The width of the area's rectangle, as a percentage of the media width
 * @method float getHeightPercentage() The height of the area's rectangle, as a percentage of the media height
 * @method float getRotationAngle() The clockwise rotation angle of the rectangle, in degrees; 0-360
 * @method float getCornerRadiusPercentage() The radius of the rectangle corner rounding, as a percentage of the media width
 *
 * @method bool isXPercentage()
 * @method bool isYPercentage()
 * @method bool isWidthPercentage()
 * @method bool isHeightPercentage()
 * @method bool isRotationAngle()
 * @method bool isCornerRadiusPercentage()
 *
 * @method $this setXPercentage()
 * @method $this setYPercentage()
 * @method $this setWidthPercentage()
 * @method $this setHeightPercentage()
 * @method $this setRotationAngle()
 * @method $this setCornerRadiusPercentage()
 *
 * @method $this unsetXPercentage()
 * @method $this unsetYPercentage()
 * @method $this unsetWidthPercentage()
 * @method $this unsetHeightPercentage()
 * @method $this unsetRotationAngle()
 * @method $this unsetCornerRadiusPercentage()
 *
 * @property float $x_percentage The abscissa of the area's center, as a percentage of the media width
 * @property float $y_percentage The ordinate of the area's center, as a percentage of the media height
 * @property float $width_percentage The width of the area's rectangle, as a percentage of the media width
 * @property float $height_percentage The height of the area's rectangle, as a percentage of the media height
 * @property float $rotation_angle The clockwise rotation angle of the rectangle, in degrees; 0-360
 * @property float $corner_radius_percentage The radius of the rectangle corner rounding, as a percentage of the media width
 *
 * @see https://core.telegram.org/bots/api#storyareaposition
 */
class StoryAreaPosition extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'x_percentage' => 'float',
        'y_percentage' => 'float',
        'width_percentage' => 'float',
        'height_percentage' => 'float',
        'rotation_angle' => 'float',
        'corner_radius_percentage' => 'float',
    ];
}
