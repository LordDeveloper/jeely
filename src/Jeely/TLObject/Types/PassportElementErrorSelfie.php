<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PassportElementErrorSelfie
* @description Represents an issue with the selfie with a document. The error is considered resolved when the file with the selfie changes.
*
* @property	string $source Error source, must be selfie
* @method	string getSource() Error source, must be selfie
* @method	bool isSource()
* @method	$this setSource()
* @method	$this unsetSource()

* @property	string $type The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
* @method	string getType() The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $file_hash Base64-encoded hash of the file with the selfie
* @method	string getFileHash() Base64-encoded hash of the file with the selfie
* @method	bool isFileHash()
* @method	$this setFileHash()
* @method	$this unsetFileHash()

* @property	string $message Error message
* @method	string getMessage() Error message
* @method	bool isMessage()
* @method	$this setMessage()
* @method	$this unsetMessage()

*/

class PassportElementErrorSelfie extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'source'=> 'string',
		'type'=> 'string',
		'file_hash'=> 'string',
		'message'=> 'string',
	];

}