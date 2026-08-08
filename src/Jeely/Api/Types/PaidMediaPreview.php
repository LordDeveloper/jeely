<?php

namespace Jeely\Api\Types;

/**
 * @class PaidMediaPreview
 * @description The paid media isn't available before the payment.
 *
 * @method string getType() Type of the paid media, always “preview”
 * @method int getWidth() Optional. Media width as defined by the sender
 * @method int getHeight() Optional. Media height as defined by the sender
 * @method int getDuration() Optional. Duration of the media in seconds as defined by the sender
 *
 * @method bool isType()
 * @method bool isWidth()
 * @method bool isHeight()
 * @method bool isDuration()
 *
 * @method $this setType()
 * @method $this setWidth()
 * @method $this setHeight()
 * @method $this setDuration()
 *
 * @method $this unsetType()
 * @method $this unsetWidth()
 * @method $this unsetHeight()
 * @method $this unsetDuration()
 *
 * @property string $type Type of the paid media, always “preview”
 * @property int $width Optional. Media width as defined by the sender
 * @property int $height Optional. Media height as defined by the sender
 * @property int $duration Optional. Duration of the media in seconds as defined by the sender
 *
 * @see https://core.telegram.org/bots/api#paidmediapreview
 */
class PaidMediaPreview extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'width' => 'int',
        'height' => 'int',
        'duration' => 'int',
    ];
}
