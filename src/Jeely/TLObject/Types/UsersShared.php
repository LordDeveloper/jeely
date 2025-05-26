<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class UsersShared
* @description This object contains information about the users whose identifiers were shared with the bot using a KeyboardButtonRequestUsers button.
*
* @property	int $request_id Identifier of the request
* @method	int getRequestId() Identifier of the request
* @method	bool isRequestId()
* @method	$this setRequestId()
* @method	$this unsetRequestId()

* @property	SharedUser[] $users Information about users shared with the bot.
* @method	SharedUser[] getUsers() Information about users shared with the bot.
* @method	bool isUsers()
* @method	$this setUsers()
* @method	$this unsetUsers()

*/

class UsersShared extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'request_id'=> 'int',
		'users'=> 'SharedUser[]',
	];

}