<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextItalic
 * @description An italicized text.
 *
 * @method string getType() Type of the rich text, always “italic”
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
 * @property string $type Type of the rich text, always “italic”
 * @property RichText $text The text
 *
 * @see https://core.telegram.org/bots/api#richtextitalic
 */
class RichTextItalic extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
    ];
}
