<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class PassportElementErrorSelfie
 * @description Represents an issue with the selfie with a document. The error is considered resolved when the file with the selfie changes.
 *
 * @method string getSource() Error source, must be selfie
 * @method string getType() The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
 * @method string getFileHash() Base64-encoded hash of the file with the selfie
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
 * @property string $source Error source, must be selfie
 * @property string $type The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
 * @property string $file_hash Base64-encoded hash of the file with the selfie
 * @property string $message Error message
 *
 * @see https://core.telegram.org/bots/api#passportelementerrorselfie
 */
class PassportElementErrorSelfie extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'source' => 'string',
        'type' => 'string',
        'file_hash' => 'string',
        'message' => 'string',
    ];
}