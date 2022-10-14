<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class Voice
 * @description This object represents a voice note.
 *
 * @method string getFileId() Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId() Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getDuration() Duration of the audio in seconds as defined by sender
 * @method string getMimeType() Optional. MIME type of the file as defined by sender
 * @method int getFileSize() Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 *
 * @method bool isFileId()
 * @method bool isFileUniqueId()
 * @method bool isDuration()
 * @method bool isMimeType()
 * @method bool isFileSize()
 *
 * @method $this setFileId()
 * @method $this setFileUniqueId()
 * @method $this setDuration()
 * @method $this setMimeType()
 * @method $this setFileSize()
 *
 * @method $this unsetFileId()
 * @method $this unsetFileUniqueId()
 * @method $this unsetDuration()
 * @method $this unsetMimeType()
 * @method $this unsetFileSize()
 *
 * @property string $file_id Identifier for this file, which can be used to download or reuse the file
 * @property string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property int $duration Duration of the audio in seconds as defined by sender
 * @property string $mime_type Optional. MIME type of the file as defined by sender
 * @property int $file_size Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 *
 * @see https://core.telegram.org/bots/api#voice 
 */
class Voice extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'file_id' => 'string',
		'file_unique_id' => 'string',
		'duration' => 'int',
		'mime_type' => 'string',
		'file_size' => 'int',
	];
}