<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class KeyboardButtonRequestUsers
* @description This object defines the criteria used to request suitable users. Information about the selected users will be shared with the bot when the corresponding button is pressed. More about requesting users »
*
* @property	int $request_id Signed 32-bit identifier of the request that will be received back in the UsersShared object. Must be unique within the message
* @method	int getRequestId() Signed 32-bit identifier of the request that will be received back in the UsersShared object. Must be unique within the message
* @method	bool isRequestId()
* @method	$this setRequestId()
* @method	$this unsetRequestId()

* @property	bool $user_is_bot Optional. Pass True to request bots, pass False to request regular users. If not specified, no additional restrictions are applied.
* @method	bool getUserIsBot() Optional. Pass True to request bots, pass False to request regular users. If not specified, no additional restrictions are applied.
* @method	bool isUserIsBot()
* @method	$this setUserIsBot()
* @method	$this unsetUserIsBot()

* @property	bool $user_is_premium Optional. Pass True to request premium users, pass False to request non-premium users. If not specified, no additional restrictions are applied.
* @method	bool getUserIsPremium() Optional. Pass True to request premium users, pass False to request non-premium users. If not specified, no additional restrictions are applied.
* @method	bool isUserIsPremium()
* @method	$this setUserIsPremium()
* @method	$this unsetUserIsPremium()

* @property	int $max_quantity Optional. The maximum number of users to be selected; 1-10. Defaults to 1.
* @method	int getMaxQuantity() Optional. The maximum number of users to be selected; 1-10. Defaults to 1.
* @method	bool isMaxQuantity()
* @method	$this setMaxQuantity()
* @method	$this unsetMaxQuantity()

* @property	bool $request_name Optional. Pass True to request the users' first and last names
* @method	bool getRequestName() Optional. Pass True to request the users' first and last names
* @method	bool isRequestName()
* @method	$this setRequestName()
* @method	$this unsetRequestName()

* @property	bool $request_username Optional. Pass True to request the users' usernames
* @method	bool getRequestUsername() Optional. Pass True to request the users' usernames
* @method	bool isRequestUsername()
* @method	$this setRequestUsername()
* @method	$this unsetRequestUsername()

* @property	bool $request_photo Optional. Pass True to request the users' photos
* @method	bool getRequestPhoto() Optional. Pass True to request the users' photos
* @method	bool isRequestPhoto()
* @method	$this setRequestPhoto()
* @method	$this unsetRequestPhoto()

*/

class KeyboardButtonRequestUsers extends TLObject implements \Jeely\Contracts\KeyboardButtonInterface
{
	const JSON_PROPERTY_MAP = [
		'request_id'=> 'int',
		'user_is_bot'=> 'bool',
		'user_is_premium'=> 'bool',
		'max_quantity'=> 'int',
		'request_name'=> 'bool',
		'request_username'=> 'bool',
		'request_photo'=> 'bool',
	];

}