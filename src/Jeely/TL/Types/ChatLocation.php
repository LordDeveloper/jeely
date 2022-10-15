<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class ChatLocation
 * @description Represents a location to which a chat is connected.
 *
 * @method Location getLocation() The location to which the supergroup is connected. Can't be a live location.
 * @method string getAddress() Location address;
1-64 characters, as defined by the chat owner
 *
 * @method bool isLocation()
 * @method bool isAddress()
 *
 * @method $this setLocation()
 * @method $this setAddress()
 *
 * @method $this unsetLocation()
 * @method $this unsetAddress()
 *
 * @property Location $location The location to which the supergroup is connected. Can't be a live location.
 * @property string $address Location address; 1-64 characters, as defined by the chat owner
 *
 * @see https://core.telegram.org/bots/api#chatlocation
 */
class ChatLocation extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'location' => 'Location',
        'address' => 'string',
    ];
}