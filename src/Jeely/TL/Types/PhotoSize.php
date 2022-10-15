<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class PhotoSize
 * @description This object represents one size of a photo or a file / sticker thumbnail.
 *
 * @method string getFileId() Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId() Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getWidth() Photo width
 * @method int getHeight() Photo height
 * @method int getFileSize() Optional. File size in bytes
 *
 * @method bool isFileId()
 * @method bool isFileUniqueId()
 * @method bool isWidth()
 * @method bool isHeight()
 * @method bool isFileSize()
 *
 * @method $this setFileId()
 * @method $this setFileUniqueId()
 * @method $this setWidth()
 * @method $this setHeight()
 * @method $this setFileSize()
 *
 * @method $this unsetFileId()
 * @method $this unsetFileUniqueId()
 * @method $this unsetWidth()
 * @method $this unsetHeight()
 * @method $this unsetFileSize()
 *
 * @property string $file_id Identifier for this file, which can be used to download or reuse the file
 * @property string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property int $width Photo width
 * @property int $height Photo height
 * @property int $file_size Optional. File size in bytes
 *
 * @see https://core.telegram.org/bots/api#photosize
 */
class PhotoSize extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'file_id' => 'string',
        'file_unique_id' => 'string',
        'width' => 'int',
        'height' => 'int',
        'file_size' => 'int',
    ];
}