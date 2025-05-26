<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class OrderInfo
* @description This object represents information about an order.
*
* @property	string $name Optional. User name
* @method	string getName() Optional. User name
* @method	bool isName()
* @method	$this setName()
* @method	$this unsetName()

* @property	string $phone_number Optional. User's phone number
* @method	string getPhoneNumber() Optional. User's phone number
* @method	bool isPhoneNumber()
* @method	$this setPhoneNumber()
* @method	$this unsetPhoneNumber()

* @property	string $email Optional. User email
* @method	string getEmail() Optional. User email
* @method	bool isEmail()
* @method	$this setEmail()
* @method	$this unsetEmail()

* @property	ShippingAddress $shipping_address Optional. User shipping address
* @method	ShippingAddress getShippingAddress() Optional. User shipping address
* @method	bool isShippingAddress()
* @method	$this setShippingAddress()
* @method	$this unsetShippingAddress()

*/

class OrderInfo extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'name'=> 'string',
		'phone_number'=> 'string',
		'email'=> 'string',
		'shipping_address'=> 'ShippingAddress',
	];

}