<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class EncryptedCredentials
* @description Describes data required for decrypting and authenticating EncryptedPassportElement. See the Telegram Passport Documentation for a complete description of the data decryption and authentication processes.
*
* @property	string $data Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication
* @method	string getData() Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication
* @method	bool isData()
* @method	$this setData()
* @method	$this unsetData()

* @property	string $hash Base64-encoded data hash for data authentication
* @method	string getHash() Base64-encoded data hash for data authentication
* @method	bool isHash()
* @method	$this setHash()
* @method	$this unsetHash()

* @property	string $secret Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
* @method	string getSecret() Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
* @method	bool isSecret()
* @method	$this setSecret()
* @method	$this unsetSecret()

*/

class EncryptedCredentials extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'data'=> 'string',
		'hash'=> 'string',
		'secret'=> 'string',
	];

}