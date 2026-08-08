<?php

namespace Jeely\Api\Types;

/**
 * @class LocationAddress
 * @description Describes the physical address of a location.
 *
 * @method string getCountryCode() The two-letter ISO 3166-1 alpha-2 country code of the country where the location is located
 * @method string getState() Optional. State of the location
 * @method string getCity() Optional. City of the location
 * @method string getStreet() Optional. Street address of the location
 *
 * @method bool isCountryCode()
 * @method bool isState()
 * @method bool isCity()
 * @method bool isStreet()
 *
 * @method $this setCountryCode()
 * @method $this setState()
 * @method $this setCity()
 * @method $this setStreet()
 *
 * @method $this unsetCountryCode()
 * @method $this unsetState()
 * @method $this unsetCity()
 * @method $this unsetStreet()
 *
 * @property string $country_code The two-letter ISO 3166-1 alpha-2 country code of the country where the location is located
 * @property string $state Optional. State of the location
 * @property string $city Optional. City of the location
 * @property string $street Optional. Street address of the location
 *
 * @see https://core.telegram.org/bots/api#locationaddress
 */
class LocationAddress extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'country_code' => 'string',
        'state' => 'string',
        'city' => 'string',
        'street' => 'string',
    ];
}
