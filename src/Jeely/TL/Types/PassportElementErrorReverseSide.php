<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class PassportElementErrorReverseSide
 * @description Represents an issue with the reverse side of a document. The error is considered resolved when the file with reverse side of the document changes.
 *
 * @method string getSource() Error source, must be reverse_side
 * @method string getType() The section of the user's Telegram Passport which has the issue, one of “driver_license”, “identity_card”
 * @method string getFileHash() Base64-encoded hash of the file with the reverse side of the document
 * @method string getMessage() Error message
 *
 * @method bool isSource()
 * @method bool isType()
 * @method bool isFileHash()
 * @method bool isMessage()
 *
 * @method $this setSource()
 * @method $this setType()
 * @method $this setFileHash()
 * @method $this setMessage()
 *
 * @method $this unsetSource()
 * @method $this unsetType()
 * @method $this unsetFileHash()
 * @method $this unsetMessage()
 *
 * @property string $source Error source, must be reverse_side
 * @property string $type The section of the user's Telegram Passport which has the issue, one of “driver_license”, “identity_card”
 * @property string $file_hash Base64-encoded hash of the file with the reverse side of the document
 * @property string $message Error message
 *
 * @see https://core.telegram.org/bots/api#passportelementerrorreverseside
 */
class PassportElementErrorReverseSide extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'source' => 'string',
        'type' => 'string',
        'file_hash' => 'string',
        'message' => 'string',
    ];
}