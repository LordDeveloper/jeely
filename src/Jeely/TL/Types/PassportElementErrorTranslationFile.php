<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class PassportElementErrorTranslationFile
 * @description Represents an issue with one of the files that constitute the translation of a document. The error is considered resolved when the file changes.
 *
 * @method string getSource() Error source, must be translation_file
 * @method string getType() Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
 * @method string getFileHash() Base64-encoded file hash
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
 * @property string $source Error source, must be translation_file
 * @property string $type Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
 * @property string $file_hash Base64-encoded file hash
 * @property string $message Error message
 *
 * @see https://core.telegram.org/bots/api#passportelementerrortranslationfile 
 */
class PassportElementErrorTranslationFile extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'source' => 'string',
		'type' => 'string',
		'file_hash' => 'string',
		'message' => 'string',
	];
}