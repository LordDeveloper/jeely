<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class PassportFile
 * @description This object represents a file uploaded to Telegram Passport. Currently all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 *
 * @method string getFileId() Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId() Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method int getFileSize() File size in bytes
 * @method int getFileDate() Unix time when the file was uploaded
 *
 * @method bool isFileId()
 * @method bool isFileUniqueId()
 * @method bool isFileSize()
 * @method bool isFileDate()
 *
 * @method $this setFileId()
 * @method $this setFileUniqueId()
 * @method $this setFileSize()
 * @method $this setFileDate()
 *
 * @method $this unsetFileId()
 * @method $this unsetFileUniqueId()
 * @method $this unsetFileSize()
 * @method $this unsetFileDate()
 *
 * @property string $file_id Identifier for this file, which can be used to download or reuse the file
 * @property string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property int $file_size File size in bytes
 * @property int $file_date Unix time when the file was uploaded
 *
 * @see https://core.telegram.org/bots/api#passportfile
 */
class PassportFile extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'file_id' => 'string',
        'file_unique_id' => 'string',
        'file_size' => 'int',
        'file_date' => 'int',
    ];
}