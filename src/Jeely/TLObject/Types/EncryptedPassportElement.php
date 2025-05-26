<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class EncryptedPassportElement
* @description Describes documents or other Telegram Passport elements shared with the bot by the user.
*
* @property	string $type Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
* @method	string getType() Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $data Optional. Base64-encoded encrypted Telegram Passport element data provided by the user; available only for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials.
* @method	string getData() Optional. Base64-encoded encrypted Telegram Passport element data provided by the user; available only for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials.
* @method	bool isData()
* @method	$this setData()
* @method	$this unsetData()

* @property	string $phone_number Optional. User's verified phone number; available only for “phone_number” type
* @method	string getPhoneNumber() Optional. User's verified phone number; available only for “phone_number” type
* @method	bool isPhoneNumber()
* @method	$this setPhoneNumber()
* @method	$this unsetPhoneNumber()

* @property	string $email Optional. User's verified email address; available only for “email” type
* @method	string getEmail() Optional. User's verified email address; available only for “email” type
* @method	bool isEmail()
* @method	$this setEmail()
* @method	$this unsetEmail()

* @property	PassportFile[] $files Optional. Array of encrypted files with documents provided by the user; available only for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
* @method	PassportFile[] getFiles() Optional. Array of encrypted files with documents provided by the user; available only for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
* @method	bool isFiles()
* @method	$this setFiles()
* @method	$this unsetFiles()

* @property	PassportFile $front_side Optional. Encrypted file with the front side of the document, provided by the user; available only for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
* @method	PassportFile getFrontSide() Optional. Encrypted file with the front side of the document, provided by the user; available only for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
* @method	bool isFrontSide()
* @method	$this setFrontSide()
* @method	$this unsetFrontSide()

* @property	PassportFile $reverse_side Optional. Encrypted file with the reverse side of the document, provided by the user; available only for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
* @method	PassportFile getReverseSide() Optional. Encrypted file with the reverse side of the document, provided by the user; available only for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
* @method	bool isReverseSide()
* @method	$this setReverseSide()
* @method	$this unsetReverseSide()

* @property	PassportFile $selfie Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available if requested for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
* @method	PassportFile getSelfie() Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available if requested for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
* @method	bool isSelfie()
* @method	$this setSelfie()
* @method	$this unsetSelfie()

* @property	PassportFile[] $translation Optional. Array of encrypted files with translated versions of documents provided by the user; available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
* @method	PassportFile[] getTranslation() Optional. Array of encrypted files with translated versions of documents provided by the user; available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
* @method	bool isTranslation()
* @method	$this setTranslation()
* @method	$this unsetTranslation()

* @property	string $hash Base64-encoded element hash for using in PassportElementErrorUnspecified
* @method	string getHash() Base64-encoded element hash for using in PassportElementErrorUnspecified
* @method	bool isHash()
* @method	$this setHash()
* @method	$this unsetHash()

*/

class EncryptedPassportElement extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'data'=> 'string',
		'phone_number'=> 'string',
		'email'=> 'string',
		'files'=> 'PassportFile[]',
		'front_side'=> 'PassportFile',
		'reverse_side'=> 'PassportFile',
		'selfie'=> 'PassportFile',
		'translation'=> 'PassportFile[]',
		'hash'=> 'string',
	];

}