<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class ShippingAddress
 * @description This object represents a shipping address.
 *
 * @method string getCountryCode() Two-letter ISO 3166-1 alpha-2 country code
 * @method string getState() State, if applicable
 * @method string getCity() City
 * @method string getStreetLine1() First line for the address
 * @method string getStreetLine2() Second line for the address
 * @method string getPostCode() Address post code
 *
 * @method bool isCountryCode()
 * @method bool isState()
 * @method bool isCity()
 * @method bool isStreetLine1()
 * @method bool isStreetLine2()
 * @method bool isPostCode()
 *
 * @method $this setCountryCode()
 * @method $this setState()
 * @method $this setCity()
 * @method $this setStreetLine1()
 * @method $this setStreetLine2()
 * @method $this setPostCode()
 *
 * @method $this unsetCountryCode()
 * @method $this unsetState()
 * @method $this unsetCity()
 * @method $this unsetStreetLine1()
 * @method $this unsetStreetLine2()
 * @method $this unsetPostCode()
 *
 * @property string $country_code Two-letter ISO 3166-1 alpha-2 country code
 * @property string $state State, if applicable
 * @property string $city City
 * @property string $street_line1 First line for the address
 * @property string $street_line2 Second line for the address
 * @property string $post_code Address post code
 *
 * @see https://core.telegram.org/bots/api#shippingaddress
 */
class ShippingAddress extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'country_code' => 'string',
        'state' => 'string',
        'city' => 'string',
        'street_line1' => 'string',
        'street_line2' => 'string',
        'post_code' => 'string',
    ];
}