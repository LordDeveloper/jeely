<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class PreparedInlineMessage
* @description Describes an inline message to be sent by a user of a Mini App.
*
* @property	string $id Unique identifier of the prepared message
* @method	string getId() Unique identifier of the prepared message
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	int $expiration_date Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used
* @method	int getExpirationDate() Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used
* @method	bool isExpirationDate()
* @method	$this setExpirationDate()
* @method	$this unsetExpirationDate()

*/

class PreparedInlineMessage extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'id'=> 'string',
		'expiration_date'=> 'int',
	];

}