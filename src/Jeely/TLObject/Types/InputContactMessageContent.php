<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputContactMessageContent
* @description Represents the content of a contact message to be sent as the result of an inline query.
*
* @property	string $phone_number Contact's phone number
* @method	string getPhoneNumber() Contact's phone number
* @method	bool isPhoneNumber()
* @method	$this setPhoneNumber()
* @method	$this unsetPhoneNumber()

* @property	string $first_name Contact's first name
* @method	string getFirstName() Contact's first name
* @method	bool isFirstName()
* @method	$this setFirstName()
* @method	$this unsetFirstName()

* @property	string $last_name Optional. Contact's last name
* @method	string getLastName() Optional. Contact's last name
* @method	bool isLastName()
* @method	$this setLastName()
* @method	$this unsetLastName()

* @property	string $vcard Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
* @method	string getVcard() Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
* @method	bool isVcard()
* @method	$this setVcard()
* @method	$this unsetVcard()

*/

class InputContactMessageContent extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'phone_number'=> 'string',
		'first_name'=> 'string',
		'last_name'=> 'string',
		'vcard'=> 'string',
	];

}