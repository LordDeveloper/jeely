<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class VideoNote
* @description This object represents a video message (available in Telegram apps as of v.4.0).
*
* @property	string $file_id Identifier for this file, which can be used to download or reuse the file
* @method	string getFileId() Identifier for this file, which can be used to download or reuse the file
* @method	bool isFileId()
* @method	$this setFileId()
* @method	$this unsetFileId()

* @property	string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
* @method	string getFileUniqueId() Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
* @method	bool isFileUniqueId()
* @method	$this setFileUniqueId()
* @method	$this unsetFileUniqueId()

* @property	int $length Video width and height (diameter of the video message) as defined by the sender
* @method	int getLength() Video width and height (diameter of the video message) as defined by the sender
* @method	bool isLength()
* @method	$this setLength()
* @method	$this unsetLength()

* @property	int $duration Duration of the video in seconds as defined by the sender
* @method	int getDuration() Duration of the video in seconds as defined by the sender
* @method	bool isDuration()
* @method	$this setDuration()
* @method	$this unsetDuration()

* @property	PhotoSize $thumbnail Optional. Video thumbnail
* @method	PhotoSize getThumbnail() Optional. Video thumbnail
* @method	bool isThumbnail()
* @method	$this setThumbnail()
* @method	$this unsetThumbnail()

* @property	int $file_size Optional. File size in bytes
* @method	int getFileSize() Optional. File size in bytes
* @method	bool isFileSize()
* @method	$this setFileSize()
* @method	$this unsetFileSize()

*/

class VideoNote extends TLObject
{
	use \Jeely\Concerns\InteractsWithMedia;

	const JSON_PROPERTY_MAP = [
		'file_id'=> 'string',
		'file_unique_id'=> 'string',
		'length'=> 'int',
		'duration'=> 'int',
		'thumbnail'=> 'PhotoSize',
		'file_size'=> 'int',
	];

}