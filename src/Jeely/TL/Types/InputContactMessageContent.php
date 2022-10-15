<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class InputContactMessageContent
 * @description Represents the content of a contact message to be sent as the result of an inline query.
 *
 * @method string getPhoneNumber() Contact's phone number
 * @method string getFirstName() Contact's first name
 * @method string getLastName() Optional. Contact's last name
 * @method string getVcard() Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
 *
 * @method bool isPhoneNumber()
 * @method bool isFirstName()
 * @method bool isLastName()
 * @method bool isVcard()
 *
 * @method $this setPhoneNumber()
 * @method $this setFirstName()
 * @method $this setLastName()
 * @method $this setVcard()
 *
 * @method $this unsetPhoneNumber()
 * @method $this unsetFirstName()
 * @method $this unsetLastName()
 * @method $this unsetVcard()
 *
 * @property string $phone_number Contact's phone number
 * @property string $first_name Contact's first name
 * @property string $last_name Optional. Contact's last name
 * @property string $vcard Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
 *
 * @see https://core.telegram.org/bots/api#inputcontactmessagecontent
 */
class InputContactMessageContent extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'phone_number' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'vcard' => 'string',
    ];
}