<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class Animation
 * @description This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
 *
 * @method string getFileId() Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId() Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getWidth() Video width as defined by sender
 * @method int getHeight() Video height as defined by sender
 * @method int getDuration() Duration of the video in seconds as defined by sender
 * @method PhotoSize getThumb() Optional. Animation thumbnail as defined by sender
 * @method string getFileName() Optional. Original animation filename as defined by sender
 * @method string getMimeType() Optional. MIME type of the file as defined by sender
 * @method int getFileSize() Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 *
 * @method bool isFileId()
 * @method bool isFileUniqueId()
 * @method bool isWidth()
 * @method bool isHeight()
 * @method bool isDuration()
 * @method bool isThumb()
 * @method bool isFileName()
 * @method bool isMimeType()
 * @method bool isFileSize()
 *
 * @method $this setFileId()
 * @method $this setFileUniqueId()
 * @method $this setWidth()
 * @method $this setHeight()
 * @method $this setDuration()
 * @method $this setThumb()
 * @method $this setFileName()
 * @method $this setMimeType()
 * @method $this setFileSize()
 *
 * @method $this unsetFileId()
 * @method $this unsetFileUniqueId()
 * @method $this unsetWidth()
 * @method $this unsetHeight()
 * @method $this unsetDuration()
 * @method $this unsetThumb()
 * @method $this unsetFileName()
 * @method $this unsetMimeType()
 * @method $this unsetFileSize()
 *
 * @property string $file_id Identifier for this file, which can be used to download or reuse the file
 * @property string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property int $width Video width as defined by sender
 * @property int $height Video height as defined by sender
 * @property int $duration Duration of the video in seconds as defined by sender
 * @property PhotoSize $thumb Optional. Animation thumbnail as defined by sender
 * @property string $file_name Optional. Original animation filename as defined by sender
 * @property string $mime_type Optional. MIME type of the file as defined by sender
 * @property int $file_size Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 *
 * @see https://core.telegram.org/bots/api#animation
 */
class Animation extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'file_id' => 'string',
        'file_unique_id' => 'string',
        'width' => 'int',
        'height' => 'int',
        'duration' => 'int',
        'thumb' => 'PhotoSize',
        'file_name' => 'string',
        'mime_type' => 'string',
        'file_size' => 'int',
    ];
}