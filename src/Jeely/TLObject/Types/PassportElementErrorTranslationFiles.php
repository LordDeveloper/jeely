<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PassportElementErrorTranslationFiles
* @description Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation change.
*
* @property	string $source Error source, must be translation_files
* @method	string getSource() Error source, must be translation_files
* @method	bool isSource()
* @method	$this setSource()
* @method	$this unsetSource()

* @property	string $type Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
* @method	string getType() Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string[] $file_hashes List of base64-encoded file hashes
* @method	string[] getFileHashes() List of base64-encoded file hashes
* @method	bool isFileHashes()
* @method	$this setFileHashes()
* @method	$this unsetFileHashes()

* @property	string $message Error message
* @method	string getMessage() Error message
* @method	bool isMessage()
* @method	$this setMessage()
* @method	$this unsetMessage()

*/

class PassportElementErrorTranslationFiles extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'source'=> 'string',
		'type'=> 'string',
		'file_hashes'=> 'string[]',
		'message'=> 'string',
	];

}