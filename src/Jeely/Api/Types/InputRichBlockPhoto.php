<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockPhoto
 * @description A block with a photo, corresponding to the HTML tag <img>.
 *
 * @method string getType() Type of the block, always “photo”
 * @method InputMediaPhoto getPhoto() The photo. Caption is ignored.
 * @method RichBlockCaption getCaption() Optional. Caption of the block
 *
 * @method bool isType()
 * @method bool isPhoto()
 * @method bool isCaption()
 *
 * @method $this setType()
 * @method $this setPhoto()
 * @method $this setCaption()
 *
 * @method $this unsetType()
 * @method $this unsetPhoto()
 * @method $this unsetCaption()
 *
 * @property string $type Type of the block, always “photo”
 * @property InputMediaPhoto $photo The photo. Caption is ignored.
 * @property RichBlockCaption $caption Optional. Caption of the block
 *
 * @see https://core.telegram.org/bots/api#inputrichblockphoto
 */
class InputRichBlockPhoto extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'photo' => 'InputMediaPhoto',
        'caption' => 'RichBlockCaption',
    ];
}
