<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PassportElementErrorFile
* @description Represents an issue with a document scan. The error is considered resolved when the file with the document scan changes.
*
* @property	string $source Error source, must be file
* @method	string getSource() Error source, must be file
* @method	bool isSource()
* @method	$this setSource()
* @method	$this unsetSource()

* @property	string $type The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
* @method	string getType() The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $file_hash Base64-encoded file hash
* @method	string getFileHash() Base64-encoded file hash
* @method	bool isFileHash()
* @method	$this setFileHash()
* @method	$this unsetFileHash()

* @property	string $message Error message
* @method	string getMessage() Error message
* @method	bool isMessage()
* @method	$this setMessage()
* @method	$this unsetMessage()

*/

class PassportElementErrorFile extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'source'=> 'string',
		'type'=> 'string',
		'file_hash'=> 'string',
		'message'=> 'string',
	];

}