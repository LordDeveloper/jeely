<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputPaidMediaVideo
* @description The paid media to send is a video.
*
* @property	string $type Type of the media, must be video
* @method	string getType() Type of the media, must be video
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
* @method	string getMedia() File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
* @method	bool isMedia()
* @method	$this setMedia()
* @method	$this unsetMedia()

* @property	string $thumbnail Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
* @method	string getThumbnail() Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
* @method	bool isThumbnail()
* @method	$this setThumbnail()
* @method	$this unsetThumbnail()

* @property	string $cover Optional. Cover for the video in the message. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
* @method	string getCover() Optional. Cover for the video in the message. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
* @method	bool isCover()
* @method	$this setCover()
* @method	$this unsetCover()

* @property	int $start_timestamp Optional. Start timestamp for the video in the message
* @method	int getStartTimestamp() Optional. Start timestamp for the video in the message
* @method	bool isStartTimestamp()
* @method	$this setStartTimestamp()
* @method	$this unsetStartTimestamp()

* @property	int $width Optional. Video width
* @method	int getWidth() Optional. Video width
* @method	bool isWidth()
* @method	$this setWidth()
* @method	$this unsetWidth()

* @property	int $height Optional. Video height
* @method	int getHeight() Optional. Video height
* @method	bool isHeight()
* @method	$this setHeight()
* @method	$this unsetHeight()

* @property	int $duration Optional. Video duration in seconds
* @method	int getDuration() Optional. Video duration in seconds
* @method	bool isDuration()
* @method	$this setDuration()
* @method	$this unsetDuration()

* @property	bool $supports_streaming Optional. Pass True if the uploaded video is suitable for streaming
* @method	bool getSupportsStreaming() Optional. Pass True if the uploaded video is suitable for streaming
* @method	bool isSupportsStreaming()
* @method	$this setSupportsStreaming()
* @method	$this unsetSupportsStreaming()

*/

class InputPaidMediaVideo extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'media'=> 'string',
		'thumbnail'=> 'string',
		'cover'=> 'string',
		'start_timestamp'=> 'int',
		'width'=> 'int',
		'height'=> 'int',
		'duration'=> 'int',
		'supports_streaming'=> 'bool',
	];

}