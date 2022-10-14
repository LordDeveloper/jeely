<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class PassportElementErrorDataField
 * @description Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
 *
 * @method string getSource() Error source, must be data
 * @method string getType() The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
 * @method string getFieldName() Name of the data field which has the error
 * @method string getDataHash() Base64-encoded data hash
 * @method string getMessage() Error message
 *
 * @method bool isSource()
 * @method bool isType()
 * @method bool isFieldName()
 * @method bool isDataHash()
 * @method bool isMessage()
 *
 * @method $this setSource()
 * @method $this setType()
 * @method $this setFieldName()
 * @method $this setDataHash()
 * @method $this setMessage()
 *
 * @method $this unsetSource()
 * @method $this unsetType()
 * @method $this unsetFieldName()
 * @method $this unsetDataHash()
 * @method $this unsetMessage()
 *
 * @property string $source Error source, must be data
 * @property string $type The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
 * @property string $field_name Name of the data field which has the error
 * @property string $data_hash Base64-encoded data hash
 * @property string $message Error message
 *
 * @see https://core.telegram.org/bots/api#passportelementerrordatafield 
 */
class PassportElementErrorDataField extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'source' => 'string',
		'type' => 'string',
		'field_name' => 'string',
		'data_hash' => 'string',
		'message' => 'string',
	];
}