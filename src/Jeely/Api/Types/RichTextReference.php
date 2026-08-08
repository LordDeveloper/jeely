<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextReference
 * @description A reference.
 *
 * @method string getType() Type of the rich text, always “reference”
 * @method RichText getText() Text of the reference
 * @method string getName() The name of the reference
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isName()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setName()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetName()
 *
 * @property string $type Type of the rich text, always “reference”
 * @property RichText $text Text of the reference
 * @property string $name The name of the reference
 *
 * @see https://core.telegram.org/bots/api#richtextreference
 */
class RichTextReference extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'name' => 'string',
    ];
}
