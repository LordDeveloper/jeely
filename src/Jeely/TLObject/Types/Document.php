<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Document
* @description This object represents a general file (as opposed to photos, voice messages and audio files).
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

* @property	PhotoSize $thumbnail Optional. Document thumbnail as defined by the sender
* @method	PhotoSize getThumbnail() Optional. Document thumbnail as defined by the sender
* @method	bool isThumbnail()
* @method	$this setThumbnail()
* @method	$this unsetThumbnail()

* @property	string $file_name Optional. Original filename as defined by the sender
* @method	string getFileName() Optional. Original filename as defined by the sender
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

class Document extends TLObject
{
	use \Jeely\Concerns\InteractsWithMedia;

	const JSON_PROPERTY_MAP = [
		'file_id'=> 'string',
		'file_unique_id'=> 'string',
		'thumbnail'=> 'PhotoSize',
		'file_name'=> 'string',
		'mime_type'=> 'string',
		'file_size'=> 'int',
	];

}