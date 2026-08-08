<?php

namespace Jeely\Api\Types;

/**
 * @class RichBlockPhoto
 * @description A block with a photo, corresponding to the HTML tag <img>.
 *
 * @method string getType() Type of the block, always “photo”
 * @method PhotoSize[] getPhoto() Available sizes of the photo
 * @method bool getHasSpoiler() Optional. True, if the media preview is covered by a spoiler animation
 * @method RichBlockCaption getCaption() Optional. Caption of the block
 *
 * @method bool isType()
 * @method bool isPhoto()
 * @method bool isHasSpoiler()
 * @method bool isCaption()
 *
 * @method $this setType()
 * @method $this setPhoto()
 * @method $this setHasSpoiler()
 * @method $this setCaption()
 *
 * @method $this unsetType()
 * @method $this unsetPhoto()
 * @method $this unsetHasSpoiler()
 * @method $this unsetCaption()
 *
 * @property string $type Type of the block, always “photo”
 * @property PhotoSize[] $photo Available sizes of the photo
 * @property bool $has_spoiler Optional. True, if the media preview is covered by a spoiler animation
 * @property RichBlockCaption $caption Optional. Caption of the block
 *
 * @see https://core.telegram.org/bots/api#richblockphoto
 */
class RichBlockPhoto extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'photo' => 'PhotoSize[]',
        'has_spoiler' => 'bool',
        'caption' => 'RichBlockCaption',
    ];
}
