<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Animation
* @description This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
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

* @property	int $width Video width as defined by the sender
* @method	int getWidth() Video width as defined by the sender
* @method	bool isWidth()
* @method	$this setWidth()
* @method	$this unsetWidth()

* @property	int $height Video height as defined by the sender
* @method	int getHeight() Video height as defined by the sender
* @method	bool isHeight()
* @method	$this setHeight()
* @method	$this unsetHeight()

* @property	int $duration Duration of the video in seconds as defined by the sender
* @method	int getDuration() Duration of the video in seconds as defined by the sender
* @method	bool isDuration()
* @method	$this setDuration()
* @method	$this unsetDuration()

* @property	PhotoSize $thumbnail Optional. Animation thumbnail as defined by the sender
* @method	PhotoSize getThumbnail() Optional. Animation thumbnail as defined by the sender
* @method	bool isThumbnail()
* @method	$this setThumbnail()
* @method	$this unsetThumbnail()

* @property	string $file_name Optional. Original animation filename as defined by the sender
* @method	string getFileName() Optional. Original animation filename as defined by the sender
* @method	bool isFileName()
* @method	$this setFileName()
* @method	$this unsetFileName()

* @property	string $mime_type Optional. MIME type of the file as defined by the sender
* @method	string getMimeType() Optional. MIME type of the file as defined by the sender
* @method	bool isMimeType()
* @method	$this setMimeType()
* @method	$this unsetMimeType()

* @property	int $file_size Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
* @method	int getFileSize() Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
* @method	bool isFileSize()
* @method	$this setFileSize()
* @method	$this unsetFileSize()

*/

class Animation extends TLObject
{
	use \Jeely\Concerns\InteractsWithMedia;

	const JSON_PROPERTY_MAP = [
		'file_id'=> 'string',
		'file_unique_id'=> 'string',
		'width'=> 'int',
		'height'=> 'int',
		'duration'=> 'int',
		'thumbnail'=> 'PhotoSize',
		'file_name'=> 'string',
		'mime_type'=> 'string',
		'file_size'=> 'int',
	];

}