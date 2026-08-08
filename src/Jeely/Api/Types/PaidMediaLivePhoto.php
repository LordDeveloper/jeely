<?php

namespace Jeely\Api\Types;

/**
 * @class PaidMediaLivePhoto
 * @description The paid media is a live photo.
 *
 * @method string getType() Type of the paid media, always “live_photo”
 * @method LivePhoto getLivePhoto() The photo
 *
 * @method bool isType()
 * @method bool isLivePhoto()
 *
 * @method $this setType()
 * @method $this setLivePhoto()
 *
 * @method $this unsetType()
 * @method $this unsetLivePhoto()
 *
 * @property string $type Type of the paid media, always “live_photo”
 * @property LivePhoto $live_photo The photo
 *
 * @see https://core.telegram.org/bots/api#paidmedialivephoto
 */
class PaidMediaLivePhoto extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'live_photo' => 'LivePhoto',
    ];
}
