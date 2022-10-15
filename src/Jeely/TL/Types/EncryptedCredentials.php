<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class EncryptedCredentials
 * @description Describes data required for decrypting and authenticating EncryptedPassportElement. See the Telegram Passport Documentation for a complete description of the data decryption and authentication processes.
 *
 * @method string getData() Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication
 * @method string getHash() Base64-encoded data hash for data authentication
 * @method string getSecret() Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
 *
 * @method bool isData()
 * @method bool isHash()
 * @method bool isSecret()
 *
 * @method $this setData()
 * @method $this setHash()
 * @method $this setSecret()
 *
 * @method $this unsetData()
 * @method $this unsetHash()
 * @method $this unsetSecret()
 *
 * @property string $data Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication
 * @property string $hash Base64-encoded data hash for data authentication
 * @property string $secret Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
 *
 * @see https://core.telegram.org/bots/api#encryptedcredentials
 */
class EncryptedCredentials extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'data' => 'string',
        'hash' => 'string',
        'secret' => 'string',
    ];
}