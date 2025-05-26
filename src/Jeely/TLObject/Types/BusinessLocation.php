<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BusinessLocation
* @description Contains information about the location of a Telegram Business account.
*
* @property	string $address Address of the business
* @method	string getAddress() Address of the business
* @method	bool isAddress()
* @method	$this setAddress()
* @method	$this unsetAddress()

* @property	Location $location Optional. Location of the business
* @method	Location getLocation() Optional. Location of the business
* @method	bool isLocation()
* @method	$this setLocation()
* @method	$this unsetLocation()

*/

class BusinessLocation extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'address'=> 'string',
		'location'=> 'Location',
	];

}