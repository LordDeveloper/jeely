<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PassportElementErrorDataField
* @description Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
*
* @property	string $source Error source, must be data
* @method	string getSource() Error source, must be data
* @method	bool isSource()
* @method	$this setSource()
* @method	$this unsetSource()

* @property	string $type The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
* @method	string getType() The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $field_name Name of the data field which has the error
* @method	string getFieldName() Name of the data field which has the error
* @method	bool isFieldName()
* @method	$this setFieldName()
* @method	$this unsetFieldName()

* @property	string $data_hash Base64-encoded data hash
* @method	string getDataHash() Base64-encoded data hash
* @method	bool isDataHash()
* @method	$this setDataHash()
* @method	$this unsetDataHash()

* @property	string $message Error message
* @method	string getMessage() Error message
* @method	bool isMessage()
* @method	$this setMessage()
* @method	$this unsetMessage()

*/

class PassportElementErrorDataField extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'source'=> 'string',
		'type'=> 'string',
		'field_name'=> 'string',
		'data_hash'=> 'string',
		'message'=> 'string',
	];

}