<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputStoryContentVideo
* @description Describes a video to post as a story.
*
* @property	string $type Type of the content, must be video
* @method	string getType() Type of the content, must be video
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $video The video to post as a story. The video must be of the size 720x1280, streamable, encoded with H.265 codec, with key frames added each second in the MPEG4 format, and must not exceed 30 MB. The video can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the video was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
* @method	string getVideo() The video to post as a story. The video must be of the size 720x1280, streamable, encoded with H.265 codec, with key frames added each second in the MPEG4 format, and must not exceed 30 MB. The video can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the video was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
* @method	bool isVideo()
* @method	$this setVideo()
* @method	$this unsetVideo()

* @property	float $duration Optional. Precise duration of the video in seconds; 0-60
* @method	float getDuration() Optional. Precise duration of the video in seconds; 0-60
* @method	bool isDuration()
* @method	$this setDuration()
* @method	$this unsetDuration()

* @property	float $cover_frame_timestamp Optional. Timestamp in seconds of the frame that will be used as the static cover for the story. Defaults to 0.0.
* @method	float getCoverFrameTimestamp() Optional. Timestamp in seconds of the frame that will be used as the static cover for the story. Defaults to 0.0.
* @method	bool isCoverFrameTimestamp()
* @method	$this setCoverFrameTimestamp()
* @method	$this unsetCoverFrameTimestamp()

* @property	bool $is_animation Optional. Pass True if the video has no sound
* @method	bool getIsAnimation() Optional. Pass True if the video has no sound
* @method	bool isIsAnimation()
* @method	$this setIsAnimation()
* @method	$this unsetIsAnimation()

*/

class InputStoryContentVideo extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'video'=> 'string',
		'duration'=> 'float',
		'cover_frame_timestamp'=> 'float',
		'is_animation'=> 'bool',
	];

}