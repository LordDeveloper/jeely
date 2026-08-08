<?php

namespace Jeely\Api\Types;

/**
 * @class BusinessLocation
 * @description Contains information about the location of a Telegram Business account.
 *
 * @method string getAddress() Address of the business
 * @method Location getLocation() Optional. Location of the business
 *
 * @method bool isAddress()
 * @method bool isLocation()
 *
 * @method $this setAddress()
 * @method $this setLocation()
 *
 * @method $this unsetAddress()
 * @method $this unsetLocation()
 *
 * @property string $address Address of the business
 * @property Location $location Optional. Location of the business
 *
 * @see https://core.telegram.org/bots/api#businesslocation
 */
class BusinessLocation extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'address' => 'string',
        'location' => 'Location',
    ];
}
