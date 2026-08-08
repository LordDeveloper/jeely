<?php

namespace Jeely\Api\Types;

/**
 * @class PaidMediaVideo
 * @description The paid media is a video.
 *
 * @method string getType() Type of the paid media, always “video”
 * @method Video getVideo() The video
 *
 * @method bool isType()
 * @method bool isVideo()
 *
 * @method $this setType()
 * @method $this setVideo()
 *
 * @method $this unsetType()
 * @method $this unsetVideo()
 *
 * @property string $type Type of the paid media, always “video”
 * @property Video $video The video
 *
 * @see https://core.telegram.org/bots/api#paidmediavideo
 */
class PaidMediaVideo extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'video' => 'Video',
    ];
}
