<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextEmailAddress
 * @description A text with an email address.
 *
 * @method string getType() Type of the rich text, always “email_address”
 * @method RichText getText() The text
 * @method string getEmailAddress() The email address
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isEmailAddress()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setEmailAddress()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetEmailAddress()
 *
 * @property string $type Type of the rich text, always “email_address”
 * @property RichText $text The text
 * @property string $email_address The email address
 *
 * @see https://core.telegram.org/bots/api#richtextemailaddress
 */
class RichTextEmailAddress extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'email_address' => 'string',
    ];
}
