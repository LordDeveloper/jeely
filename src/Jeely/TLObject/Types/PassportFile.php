<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PassportFile
* @description This object represents a file uploaded to Telegram Passport. Currently all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
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

* @property	int $file_size File size in bytes
* @method	int getFileSize() File size in bytes
* @method	bool isFileSize()
* @method	$this setFileSize()
* @method	$this unsetFileSize()

* @property	int $file_date Unix time when the file was uploaded
* @method	int getFileDate() Unix time when the file was uploaded
* @method	bool isFileDate()
* @method	$this setFileDate()
* @method	$this unsetFileDate()

*/

class PassportFile extends TLObject
{
	use \Jeely\Concerns\InteractsWithMedia;

	const JSON_PROPERTY_MAP = [
		'file_id'=> 'string',
		'file_unique_id'=> 'string',
		'file_size'=> 'int',
		'file_date'=> 'int',
	];

}