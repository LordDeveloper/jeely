<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class File
 * @description This object represents a file ready to be downloaded. The file can be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile.
 *
 * @method string getFileId() Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId() Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getFileSize() Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 * @method string getFilePath() Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
 * @method string getFileUrl() Optional. File path.
 *
 * @method bool isFileId()
 * @method bool isFileUniqueId()
 * @method bool isFileSize()
 * @method bool isFilePath()
 * @method bool isFileUrl()
 *
 * @method $this setFileId()
 * @method $this setFileUniqueId()
 * @method $this setFileSize()
 * @method $this setFilePath()
 * @method $this setFileUrl()
 *
 * @method $this unsetFileId()
 * @method $this unsetFileUniqueId()
 * @method $this unsetFileSize()
 * @method $this unsetFilePath()
 * @method $this unsetFileUrl()
 *
 * @property string $file_id Identifier for this file, which can be used to download or reuse the file
 * @property string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property int $file_size Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
 * @property string $file_path Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
 * @property string $file_url Optional. File url.
 *
 * @see https://core.telegram.org/bots/api#file
 */
class File extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'file_id' => 'string',
        'file_unique_id' => 'string',
        'file_size' => 'int',
        'file_path' => 'string',
        'file_url' => 'string',
    ];

    public function booted()
    {
        if ($filePath = $this->_getProperty('file_path')) {
            $this->_setProperty('file_url', vsprintf('%s/file/bot%s/%s', [
                rtrim($this->telegram->getBaseUri(), '/'),
                $this->telegram->getToken(),
                $filePath,
            ]));
        }
    }
}