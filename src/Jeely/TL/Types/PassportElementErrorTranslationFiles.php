<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class PassportElementErrorTranslationFiles
 * @description Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation change.
 *
 * @method string getSource() Error source, must be translation_files
 * @method string getType() Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
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
 * @property string $source Error source, must be translation_files
 * @property string $type Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
 * @property string[] $file_hashes List of base64-encoded file hashes
 * @property string $message Error message
 *
 * @see https://core.telegram.org/bots/api#passportelementerrortranslationfiles
 */
class PassportElementErrorTranslationFiles extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'source' => 'string',
        'type' => 'string',
        'file_hashes' => 'string[]',
        'message' => 'string',
    ];
}