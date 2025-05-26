<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class SharedUser
* @description This object contains information about a user that was shared with the bot using a KeyboardButtonRequestUsers button.
*
* @property	int $user_id Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means.
* @method	int getUserId() Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means.
* @method	bool isUserId()
* @method	$this setUserId()
* @method	$this unsetUserId()

* @property	string $first_name Optional. First name of the user, if the name was requested by the bot
* @method	string getFirstName() Optional. First name of the user, if the name was requested by the bot
* @method	bool isFirstName()
* @method	$this setFirstName()
* @method	$this unsetFirstName()

* @property	string $last_name Optional. Last name of the user, if the name was requested by the bot
* @method	string getLastName() Optional. Last name of the user, if the name was requested by the bot
* @method	bool isLastName()
* @method	$this setLastName()
* @method	$this unsetLastName()

* @property	string $username Optional. Username of the user, if the username was requested by the bot
* @method	string getUsername() Optional. Username of the user, if the username was requested by the bot
* @method	bool isUsername()
* @method	$this setUsername()
* @method	$this unsetUsername()

* @property	PhotoSize[] $photo Optional. Available sizes of the chat photo, if the photo was requested by the bot
* @method	PhotoSize[] getPhoto() Optional. Available sizes of the chat photo, if the photo was requested by the bot
* @method	bool isPhoto()
* @method	$this setPhoto()
* @method	$this unsetPhoto()

*/

class SharedUser extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'user_id'=> 'int',
		'first_name'=> 'string',
		'last_name'=> 'string',
		'username'=> 'string',
		'photo'=> 'PhotoSize[]',
	];

}