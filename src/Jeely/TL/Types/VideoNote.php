<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class VideoNote
 * @description This object represents a video message (available in Telegram apps as of v.4.0).
 *
 * @method string getFileId() Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId() Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getLength() Video width and height (diameter of the video message) as defined by sender
 * @method int getDuration() Duration of the video in seconds as defined by sender
 * @method PhotoSize getThumb() Optional. Video thumbnail
 * @method int getFileSize() Optional. File size in bytes
 *
 * @method bool isFileId()
 * @method bool isFileUniqueId()
 * @method bool isLength()
 * @method bool isDuration()
 * @method bool isThumb()
 * @method bool isFileSize()
 *
 * @method $this setFileId()
 * @method $this setFileUniqueId()
 * @method $this setLength()
 * @method $this setDuration()
 * @method $this setThumb()
 * @method $this setFileSize()
 *
 * @method $this unsetFileId()
 * @method $this unsetFileUniqueId()
 * @method $this unsetLength()
 * @method $this unsetDuration()
 * @method $this unsetThumb()
 * @method $this unsetFileSize()
 *
 * @property string $file_id Identifier for this file, which can be used to download or reuse the file
 * @property string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property int $length Video width and height (diameter of the video message) as defined by sender
 * @property int $duration Duration of the video in seconds as defined by sender
 * @property PhotoSize $thumb Optional. Video thumbnail
 * @property int $file_size Optional. File size in bytes
 *
 * @see https://core.telegram.org/bots/api#videonote 
 */
class VideoNote extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'file_id' => 'string',
		'file_unique_id' => 'string',
		'length' => 'int',
		'duration' => 'int',
		'thumb' => 'PhotoSize',
		'file_size' => 'int',
	];
}