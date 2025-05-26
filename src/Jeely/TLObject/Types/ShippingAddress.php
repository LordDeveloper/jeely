<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ShippingAddress
* @description This object represents a shipping address.
*
* @property	string $country_code Two-letter ISO 3166-1 alpha-2 country code
* @method	string getCountryCode() Two-letter ISO 3166-1 alpha-2 country code
* @method	bool isCountryCode()
* @method	$this setCountryCode()
* @method	$this unsetCountryCode()

* @property	string $state State, if applicable
* @method	string getState() State, if applicable
* @method	bool isState()
* @method	$this setState()
* @method	$this unsetState()

* @property	string $city City
* @method	string getCity() City
* @method	bool isCity()
* @method	$this setCity()
* @method	$this unsetCity()

* @property	string $street_line1 First line for the address
* @method	string getStreetLine1() First line for the address
* @method	bool isStreetLine1()
* @method	$this setStreetLine1()
* @method	$this unsetStreetLine1()

* @property	string $street_line2 Second line for the address
* @method	string getStreetLine2() Second line for the address
* @method	bool isStreetLine2()
* @method	$this setStreetLine2()
* @method	$this unsetStreetLine2()

* @property	string $post_code Address post code
* @method	string getPostCode() Address post code
* @method	bool isPostCode()
* @method	$this setPostCode()
* @method	$this unsetPostCode()

*/

class ShippingAddress extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'country_code'=> 'string',
		'state'=> 'string',
		'city'=> 'string',
		'street_line1'=> 'string',
		'street_line2'=> 'string',
		'post_code'=> 'string',
	];

}