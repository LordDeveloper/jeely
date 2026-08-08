<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextPhoneNumber
 * @description A text with a phone number.
 *
 * @method string getType() Type of the rich text, always “phone_number”
 * @method RichText getText() The text
 * @method string getPhoneNumber() The phone number
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isPhoneNumber()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setPhoneNumber()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetPhoneNumber()
 *
 * @property string $type Type of the rich text, always “phone_number”
 * @property RichText $text The text
 * @property string $phone_number The phone number
 *
 * @see https://core.telegram.org/bots/api#richtextphonenumber
 */
class RichTextPhoneNumber extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'phone_number' => 'string',
    ];
}
