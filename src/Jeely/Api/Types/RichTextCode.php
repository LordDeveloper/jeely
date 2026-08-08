<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextCode
 * @description A monowidth text.
 *
 * @method string getType() Type of the rich text, always “code”
 * @method RichText getText() The text
 *
 * @method bool isType()
 * @method bool isText()
 *
 * @method $this setType()
 * @method $this setText()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 *
 * @property string $type Type of the rich text, always “code”
 * @property RichText $text The text
 *
 * @see https://core.telegram.org/bots/api#richtextcode
 */
class RichTextCode extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
    ];
}
