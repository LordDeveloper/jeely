<?php

namespace Jeely\Api\Types;

/**
 * @class VideoQuality
 * @description This object represents a video file of a specific quality.
 *
 * @method string getFileId() Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId() Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getWidth() Video width
 * @method int getHeight() Video height
 * @method string getCodec() Codec that was used to encode the video, for example, “h264”, “h265”, or “av01”
 * @method int getFileSize() Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 *
 * @method bool isFileId()
 * @method bool isFileUniqueId()
 * @method bool isWidth()
 * @method bool isHeight()
 * @method bool isCodec()
 * @method bool isFileSize()
 *
 * @method $this setFileId()
 * @method $this setFileUniqueId()
 * @method $this setWidth()
 * @method $this setHeight()
 * @method $this setCodec()
 * @method $this setFileSize()
 *
 * @method $this unsetFileId()
 * @method $this unsetFileUniqueId()
 * @method $this unsetWidth()
 * @method $this unsetHeight()
 * @method $this unsetCodec()
 * @method $this unsetFileSize()
 *
 * @property string $file_id Identifier for this file, which can be used to download or reuse the file
 * @property string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property int $width Video width
 * @property int $height Video height
 * @property string $codec Codec that was used to encode the video, for example, “h264”, “h265”, or “av01”
 * @property int $file_size Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 *
 * @see https://core.telegram.org/bots/api#videoquality
 */
class VideoQuality extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'file_id' => 'string',
        'file_unique_id' => 'string',
        'width' => 'int',
        'height' => 'int',
        'codec' => 'string',
        'file_size' => 'int',
    ];
}
