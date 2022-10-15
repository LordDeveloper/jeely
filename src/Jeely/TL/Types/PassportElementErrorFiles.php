<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class PassportElementErrorFiles
 * @description Represents an issue with a list of scans. The error is considered resolved when the list of files containing the scans changes.
 *
 * @method string getSource() Error source, must be files
 * @method string getType() The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
 * @method string[] getFileHashes() List of base64-encoded file hashes
 * @method string getMessage() Error message
 *
 * @method bool isSource()
 * @method bool isType()
 * @method bool isFileHashes()
 * @method bool isMessage()
 *
 * @method $this setSource()
 * @method $this setType()
 * @method $this setFileHashes()
 * @method $this setMessage()
 *
 * @method $this unsetSource()
 * @method $this unsetType()
 * @method $this unsetFileHashes()
 * @method $this unsetMessage()
 *
 * @property string $source Error source, must be files
 * @property string $type The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
 * @property string[] $file_hashes List of base64-encoded file hashes
 * @property string $message Error message
 *
 * @see https://core.telegram.org/bots/api#passportelementerrorfiles
 */
class PassportElementErrorFiles extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'source' => 'string',
        'type' => 'string',
        'file_hashes' => 'string[]',
        'message' => 'string',
    ];
}