<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class ChatPhoto
 * @description This object represents a chat photo.
 *
 * @method string getSmallFileId() File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
 * @method string getSmallFileUniqueId() Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method string getBigFileId() File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
 * @method string getBigFileUniqueId() Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 *
 * @method bool isSmallFileId()
 * @method bool isSmallFileUniqueId()
 * @method bool isBigFileId()
 * @method bool isBigFileUniqueId()
 *
 * @method $this setSmallFileId()
 * @method $this setSmallFileUniqueId()
 * @method $this setBigFileId()
 * @method $this setBigFileUniqueId()
 *
 * @method $this unsetSmallFileId()
 * @method $this unsetSmallFileUniqueId()
 * @method $this unsetBigFileId()
 * @method $this unsetBigFileUniqueId()
 *
 * @property string $small_file_id File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
 * @property string $small_file_unique_id Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property string $big_file_id File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
 * @property string $big_file_unique_id Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 *
 * @see https://core.telegram.org/bots/api#chatphoto 
 */
class ChatPhoto extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'small_file_id' => 'string',
		'small_file_unique_id' => 'string',
		'big_file_id' => 'string',
		'big_file_unique_id' => 'string',
	];
}