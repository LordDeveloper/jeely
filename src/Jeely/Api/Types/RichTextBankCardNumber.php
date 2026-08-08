<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextBankCardNumber
 * @description A text with a bank card number.
 *
 * @method string getType() Type of the rich text, always “bank_card_number”
 * @method RichText getText() The text
 * @method string getBankCardNumber() The bank card number
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isBankCardNumber()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setBankCardNumber()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetBankCardNumber()
 *
 * @property string $type Type of the rich text, always “bank_card_number”
 * @property RichText $text The text
 * @property string $bank_card_number The bank card number
 *
 * @see https://core.telegram.org/bots/api#richtextbankcardnumber
 */
class RichTextBankCardNumber extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'bank_card_number' => 'string',
    ];
}
