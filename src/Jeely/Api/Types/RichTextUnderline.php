<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextUnderline
 * @description An underlined text.
 *
 * @method string getType() Type of the rich text, always “underline”
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
 * @property string $type Type of the rich text, always “underline”
 * @property RichText $text The text
 *
 * @see https://core.telegram.org/bots/api#richtextunderline
 */
class RichTextUnderline extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
    ];
}
