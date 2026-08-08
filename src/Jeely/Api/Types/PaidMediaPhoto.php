<?php

namespace Jeely\Api\Types;

/**
 * @class PaidMediaPhoto
 * @description The paid media is a photo.
 *
 * @method string getType() Type of the paid media, always “photo”
 * @method PhotoSize[] getPhoto() The photo
 *
 * @method bool isType()
 * @method bool isPhoto()
 *
 * @method $this setType()
 * @method $this setPhoto()
 *
 * @method $this unsetType()
 * @method $this unsetPhoto()
 *
 * @property string $type Type of the paid media, always “photo”
 * @property PhotoSize[] $photo The photo
 *
 * @see https://core.telegram.org/bots/api#paidmediaphoto
 */
class PaidMediaPhoto extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'photo' => 'PhotoSize[]',
    ];
}
