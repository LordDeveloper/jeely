<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PassportElementErrorUnspecified
* @description Represents an issue in an unspecified place. The error is considered resolved when new data is added.
*
* @property	string $source Error source, must be unspecified
* @method	string getSource() Error source, must be unspecified
* @method	bool isSource()
* @method	$this setSource()
* @method	$this unsetSource()

* @property	string $type Type of element of the user's Telegram Passport which has the issue
* @method	string getType() Type of element of the user's Telegram Passport which has the issue
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $element_hash Base64-encoded element hash
* @method	string getElementHash() Base64-encoded element hash
* @method	bool isElementHash()
* @method	$this setElementHash()
* @method	$this unsetElementHash()

* @property	string $message Error message
* @method	string getMessage() Error message
* @method	bool isMessage()
* @method	$this setMessage()
* @method	$this unsetMessage()

*/

class PassportElementErrorUnspecified extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'source'=> 'string',
		'type'=> 'string',
		'element_hash'=> 'string',
		'message'=> 'string',
	];

}