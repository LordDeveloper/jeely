<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class Contact
 * @description This object represents a phone contact.
 *
 * @method string getPhoneNumber() Contact's phone number
 * @method string getFirstName() Contact's first name
 * @method string getLastName() Optional. Contact's last name
 * @method int getUserId() Optional. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @method string getVcard() Optional. Additional data about the contact in the form of a vCard
 *
 * @method bool isPhoneNumber()
 * @method bool isFirstName()
 * @method bool isLastName()
 * @method bool isUserId()
 * @method bool isVcard()
 *
 * @method $this setPhoneNumber()
 * @method $this setFirstName()
 * @method $this setLastName()
 * @method $this setUserId()
 * @method $this setVcard()
 *
 * @method $this unsetPhoneNumber()
 * @method $this unsetFirstName()
 * @method $this unsetLastName()
 * @method $this unsetUserId()
 * @method $this unsetVcard()
 *
 * @property string $phone_number Contact's phone number
 * @property string $first_name Contact's first name
 * @property string $last_name Optional. Contact's last name
 * @property int $user_id Optional. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property string $vcard Optional. Additional data about the contact in the form of a vCard
 *
 * @see https://core.telegram.org/bots/api#contact 
 */
class Contact extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'phone_number' => 'string',
		'first_name' => 'string',
		'last_name' => 'string',
		'user_id' => 'int',
		'vcard' => 'string',
	];
}