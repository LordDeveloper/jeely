<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PhotoSize
* @description This object represents one size of a photo or a file / sticker thumbnail.
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

* @property	int $width Photo width
* @method	int getWidth() Photo width
* @method	bool isWidth()
* @method	$this setWidth()
* @method	$this unsetWidth()

* @property	int $height Photo height
* @method	int getHeight() Photo height
* @method	bool isHeight()
* @method	$this setHeight()
* @method	$this unsetHeight()

* @property	int $file_size Optional. File size in bytes
* @method	int getFileSize() Optional. File size in bytes
* @method	bool isFileSize()
* @method	$this setFileSize()
* @method	$this unsetFileSize()

*/

class PhotoSize extends TLObject
{
	use \Jeely\Concerns\InteractsWithMedia;

	const JSON_PROPERTY_MAP = [
		'file_id'=> 'string',
		'file_unique_id'=> 'string',
		'width'=> 'int',
		'height'=> 'int',
		'file_size'=> 'int',
	];

}