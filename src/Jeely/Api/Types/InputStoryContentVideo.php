<?php

namespace Jeely\Api\Types;

/**
 * @class InputStoryContentVideo
 * @description Describes a video to post as a story.
 *
 * @method string getType() Type of the content, must be video
 * @method string getVideo() The video to post as a story. The video must be of the size 720x1280, streamable, encoded with H.265 codec, with key frames added each second in the MPEG4 format, and must not exceed 30 MB. The video can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the video was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @method float getDuration() Optional. Precise duration of the video in seconds; 0-60
 * @method float getCoverFrameTimestamp() Optional. Timestamp in seconds of the frame that will be used as the static cover for the story. Defaults to 0.0.
 * @method bool getIsAnimation() Optional. Pass True if the video has no sound
 *
 * @method bool isType()
 * @method bool isVideo()
 * @method bool isDuration()
 * @method bool isCoverFrameTimestamp()
 * @method bool isIsAnimation()
 *
 * @method $this setType()
 * @method $this setVideo()
 * @method $this setDuration()
 * @method $this setCoverFrameTimestamp()
 * @method $this setIsAnimation()
 *
 * @method $this unsetType()
 * @method $this unsetVideo()
 * @method $this unsetDuration()
 * @method $this unsetCoverFrameTimestamp()
 * @method $this unsetIsAnimation()
 *
 * @property string $type Type of the content, must be video
 * @property string $video The video to post as a story. The video must be of the size 720x1280, streamable, encoded with H.265 codec, with key frames added each second in the MPEG4 format, and must not exceed 30 MB. The video can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the video was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
 * @property float $duration Optional. Precise duration of the video in seconds; 0-60
 * @property float $cover_frame_timestamp Optional. Timestamp in seconds of the frame that will be used as the static cover for the story. Defaults to 0.0.
 * @property bool $is_animation Optional. Pass True if the video has no sound
 *
 * @see https://core.telegram.org/bots/api#inputstorycontentvideo
 */
class InputStoryContentVideo extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'video' => 'string',
        'duration' => 'float',
        'cover_frame_timestamp' => 'float',
        'is_animation' => 'bool',
    ];
}
