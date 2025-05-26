<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PassportData
* @description Describes Telegram Passport data shared with the bot by the user.
*
* @property	EncryptedPassportElement[] $data Array with information about documents and other Telegram Passport elements that was shared with the bot
* @method	EncryptedPassportElement[] getData() Array with information about documents and other Telegram Passport elements that was shared with the bot
* @method	bool isData()
* @method	$this setData()
* @method	$this unsetData()

* @property	EncryptedCredentials $credentials Encrypted credentials required to decrypt the data
* @method	EncryptedCredentials getCredentials() Encrypted credentials required to decrypt the data
* @method	bool isCredentials()
* @method	$this setCredentials()
* @method	$this unsetCredentials()

*/

class PassportData extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'data'=> 'EncryptedPassportElement[]',
		'credentials'=> 'EncryptedCredentials',
	];

}