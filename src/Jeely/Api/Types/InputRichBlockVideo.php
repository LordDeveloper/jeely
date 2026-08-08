<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockVideo
 * @description A block with a video, corresponding to the HTML tag <video>.
 *
 * @method string getType() Type of the block, always “video”
 * @method InputMediaVideo getVideo() The video. Caption is ignored.
 * @method RichBlockCaption getCaption() Optional. Caption of the block
 *
 * @method bool isType()
 * @method bool isVideo()
 * @method bool isCaption()
 *
 * @method $this setType()
 * @method $this setVideo()
 * @method $this setCaption()
 *
 * @method $this unsetType()
 * @method $this unsetVideo()
 * @method $this unsetCaption()
 *
 * @property string $type Type of the block, always “video”
 * @property InputMediaVideo $video The video. Caption is ignored.
 * @property RichBlockCaption $caption Optional. Caption of the block
 *
 * @see https://core.telegram.org/bots/api#inputrichblockvideo
 */
class InputRichBlockVideo extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'video' => 'InputMediaVideo',
        'caption' => 'RichBlockCaption',
    ];
}
