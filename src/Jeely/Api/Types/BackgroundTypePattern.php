<?php

namespace Jeely\Api\Types;

/**
 * @class BackgroundTypePattern
 * @description The background is a .PNG or .TGV (gzipped subset of SVG with MIME type “application/x-tgwallpattern”) pattern to be combined with the background fill chosen by the user.
 *
 * @method string getType() Type of the background, always “pattern”
 * @method Document getDocument() Document with the pattern
 * @method BackgroundFill getFill() The background fill that is combined with the pattern
 * @method int getIntensity() Intensity of the pattern when it is shown above the filled background; 0-100
 * @method bool getIsInverted() Optional. True, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only.
 * @method bool getIsMoving() Optional. True, if the background moves slightly when the device is tilted
 *
 * @method bool isType()
 * @method bool isDocument()
 * @method bool isFill()
 * @method bool isIntensity()
 * @method bool isIsInverted()
 * @method bool isIsMoving()
 *
 * @method $this setType()
 * @method $this setDocument()
 * @method $this setFill()
 * @method $this setIntensity()
 * @method $this setIsInverted()
 * @method $this setIsMoving()
 *
 * @method $this unsetType()
 * @method $this unsetDocument()
 * @method $this unsetFill()
 * @method $this unsetIntensity()
 * @method $this unsetIsInverted()
 * @method $this unsetIsMoving()
 *
 * @property string $type Type of the background, always “pattern”
 * @property Document $document Document with the pattern
 * @property BackgroundFill $fill The background fill that is combined with the pattern
 * @property int $intensity Intensity of the pattern when it is shown above the filled background; 0-100
 * @property bool $is_inverted Optional. True, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only.
 * @property bool $is_moving Optional. True, if the background moves slightly when the device is tilted
 *
 * @see https://core.telegram.org/bots/api#backgroundtypepattern
 */
class BackgroundTypePattern extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'document' => 'Document',
        'fill' => 'BackgroundFill',
        'intensity' => 'int',
        'is_inverted' => 'bool',
        'is_moving' => 'bool',
    ];
}
