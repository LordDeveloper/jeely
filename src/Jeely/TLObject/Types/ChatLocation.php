<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatLocation
* @description Represents a location to which a chat is connected.
*
* @property	Location $location The location to which the supergroup is connected. Can't be a live location.
* @method	Location getLocation() The location to which the supergroup is connected. Can't be a live location.
* @method	bool isLocation()
* @method	$this setLocation()
* @method	$this unsetLocation()

* @property	string $address Location address; 1-64 characters, as defined by the chat owner
* @method	string getAddress() Location address; 1-64 characters, as defined by the chat owner
* @method	bool isAddress()
* @method	$this setAddress()
* @method	$this unsetAddress()

*/

class ChatLocation extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'location'=> 'Location',
		'address'=> 'string',
	];

}