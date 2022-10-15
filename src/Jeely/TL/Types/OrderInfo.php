<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class OrderInfo
 * @description This object represents information about an order.
 *
 * @method string getName() Optional. User name
 * @method string getPhoneNumber() Optional. User's phone number
 * @method string getEmail() Optional. User email
 * @method ShippingAddress getShippingAddress() Optional. User shipping address
 *
 * @method bool isName()
 * @method bool isPhoneNumber()
 * @method bool isEmail()
 * @method bool isShippingAddress()
 *
 * @method $this setName()
 * @method $this setPhoneNumber()
 * @method $this setEmail()
 * @method $this setShippingAddress()
 *
 * @method $this unsetName()
 * @method $this unsetPhoneNumber()
 * @method $this unsetEmail()
 * @method $this unsetShippingAddress()
 *
 * @property string $name Optional. User name
 * @property string $phone_number Optional. User's phone number
 * @property string $email Optional. User email
 * @property ShippingAddress $shipping_address Optional. User shipping address
 *
 * @see https://core.telegram.org/bots/api#orderinfo
 */
class OrderInfo extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'name' => 'string',
        'phone_number' => 'string',
        'email' => 'string',
        'shipping_address' => 'ShippingAddress',
    ];
}