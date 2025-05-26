<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatPhoto
* @description This object represents a chat photo.
*
* @property	string $small_file_id File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
* @method	string getSmallFileId() File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
* @method	bool isSmallFileId()
* @method	$this setSmallFileId()
* @method	$this unsetSmallFileId()

* @property	string $small_file_unique_id Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
* @method	string getSmallFileUniqueId() Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
* @method	bool isSmallFileUniqueId()
* @method	$this setSmallFileUniqueId()
* @method	$this unsetSmallFileUniqueId()

* @property	string $big_file_id File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
* @method	string getBigFileId() File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
* @method	bool isBigFileId()
* @method	$this setBigFileId()
* @method	$this unsetBigFileId()

* @property	string $big_file_unique_id Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
* @method	string getBigFileUniqueId() Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
* @method	bool isBigFileUniqueId()
* @method	$this setBigFileUniqueId()
* @method	$this unsetBigFileUniqueId()

*/

class ChatPhoto extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'small_file_id'=> 'string',
		'small_file_unique_id'=> 'string',
		'big_file_id'=> 'string',
		'big_file_unique_id'=> 'string',
	];

}