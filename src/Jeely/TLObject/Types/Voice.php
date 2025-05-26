<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Voice
* @description This object represents a voice note.
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

* @property	int $duration Duration of the audio in seconds as defined by the sender
* @method	int getDuration() Duration of the audio in seconds as defined by the sender
* @method	bool isDuration()
* @method	$this setDuration()
* @method	$this unsetDuration()

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

class Voice extends TLObject
{
	use \Jeely\Concerns\InteractsWithMedia;

	const JSON_PROPERTY_MAP = [
		'file_id'=> 'string',
		'file_unique_id'=> 'string',
		'duration'=> 'int',
		'mime_type'=> 'string',
		'file_size'=> 'int',
	];

}