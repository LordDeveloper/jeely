<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Contact
* @description This object represents a phone contact.
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

* @property	int $user_id Optional. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
* @method	int getUserId() Optional. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
* @method	bool isUserId()
* @method	$this setUserId()
* @method	$this unsetUserId()

* @property	string $vcard Optional. Additional data about the contact in the form of a vCard
* @method	string getVcard() Optional. Additional data about the contact in the form of a vCard
* @method	bool isVcard()
* @method	$this setVcard()
* @method	$this unsetVcard()

*/

class Contact extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'phone_number'=> 'string',
		'first_name'=> 'string',
		'last_name'=> 'string',
		'user_id'=> 'int',
		'vcard'=> 'string',
	];

}