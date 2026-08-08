<?php

namespace Jeely\Api\Types;

/**
 * @class LivePhoto
 * @description This object represents a live photo.
 *
 * @method PhotoSize[] getPhoto() Optional. Available sizes of the corresponding static photo
 * @method string getFileId() Identifier for the video file which can be used to download or reuse the file
 * @method string getFileUniqueId() Unique identifier for the video file which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getWidth() Video width as defined by the sender
 * @method int getHeight() Video height as defined by the sender
 * @method int getDuration() Duration of the video in seconds as defined by the sender
 * @method string getMimeType() Optional. MIME type of the file as defined by the sender
 * @method int getFileSize() Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 *
 * @method bool isPhoto()
 * @method bool isFileId()
 * @method bool isFileUniqueId()
 * @method bool isWidth()
 * @method bool isHeight()
 * @method bool isDuration()
 * @method bool isMimeType()
 * @method bool isFileSize()
 *
 * @method $this setPhoto()
 * @method $this setFileId()
 * @method $this setFileUniqueId()
 * @method $this setWidth()
 * @method $this setHeight()
 * @method $this setDuration()
 * @method $this setMimeType()
 * @method $this setFileSize()
 *
 * @method $this unsetPhoto()
 * @method $this unsetFileId()
 * @method $this unsetFileUniqueId()
 * @method $this unsetWidth()
 * @method $this unsetHeight()
 * @method $this unsetDuration()
 * @method $this unsetMimeType()
 * @method $this unsetFileSize()
 *
 * @property PhotoSize[] $photo Optional. Available sizes of the corresponding static photo
 * @property string $file_id Identifier for the video file which can be used to download or reuse the file
 * @property string $file_unique_id Unique identifier for the video file which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property int $width Video width as defined by the sender
 * @property int $height Video height as defined by the sender
 * @property int $duration Duration of the video in seconds as defined by the sender
 * @property string $mime_type Optional. MIME type of the file as defined by the sender
 * @property int $file_size Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 *
 * @see https://core.telegram.org/bots/api#livephoto
 */
class LivePhoto extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'photo' => 'PhotoSize[]',
        'file_id' => 'string',
        'file_unique_id' => 'string',
        'width' => 'int',
        'height' => 'int',
        'duration' => 'int',
        'mime_type' => 'string',
        'file_size' => 'int',
    ];
}
