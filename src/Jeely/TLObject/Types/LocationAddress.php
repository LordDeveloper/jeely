<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class LocationAddress
* @description Describes the physical address of a location.
*
* @property	string $country_code The two-letter ISO 3166-1 alpha-2 country code of the country where the location is located
* @method	string getCountryCode() The two-letter ISO 3166-1 alpha-2 country code of the country where the location is located
* @method	bool isCountryCode()
* @method	$this setCountryCode()
* @method	$this unsetCountryCode()

* @property	string $state Optional. State of the location
* @method	string getState() Optional. State of the location
* @method	bool isState()
* @method	$this setState()
* @method	$this unsetState()

* @property	string $city Optional. City of the location
* @method	string getCity() Optional. City of the location
* @method	bool isCity()
* @method	$this setCity()
* @method	$this unsetCity()

* @property	string $street Optional. Street address of the location
* @method	string getStreet() Optional. Street address of the location
* @method	bool isStreet()
* @method	$this setStreet()
* @method	$this unsetStreet()

*/

class LocationAddress extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'country_code'=> 'string',
		'state'=> 'string',
		'city'=> 'string',
		'street'=> 'string',
	];

}