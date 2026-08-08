<?php

namespace Jeely\Api\Types;

/**
 * @class RichBlockVideo
 * @description A block with a video, corresponding to the HTML tag <video>.
 *
 * @method string getType() Type of the block, always “video”
 * @method Video getVideo() The video
 * @method bool getHasSpoiler() Optional. True, if the media preview is covered by a spoiler animation
 * @method RichBlockCaption getCaption() Optional. Caption of the block
 *
 * @method bool isType()
 * @method bool isVideo()
 * @method bool isHasSpoiler()
 * @method bool isCaption()
 *
 * @method $this setType()
 * @method $this setVideo()
 * @method $this setHasSpoiler()
 * @method $this setCaption()
 *
 * @method $this unsetType()
 * @method $this unsetVideo()
 * @method $this unsetHasSpoiler()
 * @method $this unsetCaption()
 *
 * @property string $type Type of the block, always “video”
 * @property Video $video The video
 * @property bool $has_spoiler Optional. True, if the media preview is covered by a spoiler animation
 * @property RichBlockCaption $caption Optional. Caption of the block
 *
 * @see https://core.telegram.org/bots/api#richblockvideo
 */
class RichBlockVideo extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'video' => 'Video',
        'has_spoiler' => 'bool',
        'caption' => 'RichBlockCaption',
    ];
}
