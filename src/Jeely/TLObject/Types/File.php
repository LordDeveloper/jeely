<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class File
* @description This object represents a file ready to be downloaded. The file can be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile.
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

* @property	int $file_size Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
* @method	int getFileSize() Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
* @method	bool isFileSize()
* @method	$this setFileSize()
* @method	$this unsetFileSize()

* @property	string $file_path Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
* @method	string getFilePath() Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
* @method	bool isFilePath()
* @method	$this setFilePath()
* @method	$this unsetFilePath()

*/

class File extends TLObject
{
	use \Jeely\Concerns\InteractsWithFile;

	use \Jeely\Concerns\InteractsWithMedia;

	const JSON_PROPERTY_MAP = [
		'file_id'=> 'string',
		'file_unique_id'=> 'string',
		'file_size'=> 'int',
		'file_path'=> 'string',
		\Jeely\Extra\LazyProps\File::class,
	];

}