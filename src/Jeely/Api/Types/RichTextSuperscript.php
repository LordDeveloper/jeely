<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextSuperscript
 * @description A superscript text.
 *
 * @method string getType() Type of the rich text, always “superscript”
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
 * @property string $type Type of the rich text, always “superscript”
 * @property RichText $text The text
 *
 * @see https://core.telegram.org/bots/api#richtextsuperscript
 */
class RichTextSuperscript extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
    ];
}
