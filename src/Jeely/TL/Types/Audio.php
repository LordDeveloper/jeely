<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class Audio
 * @description This object represents an audio file to be treated as music by the Telegram clients.
 *
 * @method string getFileId() Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId() Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getDuration() Duration of the audio in seconds as defined by sender
 * @method string getPerformer() Optional. Performer of the audio as defined by sender or by audio tags
 * @method string getTitle() Optional. Title of the audio as defined by sender or by audio tags
 * @method string getFileName() Optional. Original filename as defined by sender
 * @method string getMimeType() Optional. MIME type of the file as defined by sender
 * @method int getFileSize() Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 * @method PhotoSize getThumb() Optional. Thumbnail of the album cover to which the music file belongs
 *
 * @method bool isFileId()
 * @method bool isFileUniqueId()
 * @method bool isDuration()
 * @method bool isPerformer()
 * @method bool isTitle()
 * @method bool isFileName()
 * @method bool isMimeType()
 * @method bool isFileSize()
 * @method bool isThumb()
 *
 * @method $this setFileId()
 * @method $this setFileUniqueId()
 * @method $this setDuration()
 * @method $this setPerformer()
 * @method $this setTitle()
 * @method $this setFileName()
 * @method $this setMimeType()
 * @method $this setFileSize()
 * @method $this setThumb()
 *
 * @method $this unsetFileId()
 * @method $this unsetFileUniqueId()
 * @method $this unsetDuration()
 * @method $this unsetPerformer()
 * @method $this unsetTitle()
 * @method $this unsetFileName()
 * @method $this unsetMimeType()
 * @method $this unsetFileSize()
 * @method $this unsetThumb()
 *
 * @property string $file_id Identifier for this file, which can be used to download or reuse the file
 * @property string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property int $duration Duration of the audio in seconds as defined by sender
 * @property string $performer Optional. Performer of the audio as defined by sender or by audio tags
 * @property string $title Optional. Title of the audio as defined by sender or by audio tags
 * @property string $file_name Optional. Original filename as defined by sender
 * @property string $mime_type Optional. MIME type of the file as defined by sender
 * @property int $file_size Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 * @property PhotoSize $thumb Optional. Thumbnail of the album cover to which the music file belongs
 *
 * @see https://core.telegram.org/bots/api#audio 
 */
class Audio extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'file_id' => 'string',
		'file_unique_id' => 'string',
		'duration' => 'int',
		'performer' => 'string',
		'title' => 'string',
		'file_name' => 'string',
		'mime_type' => 'string',
		'file_size' => 'int',
		'thumb' => 'PhotoSize',
	];
}