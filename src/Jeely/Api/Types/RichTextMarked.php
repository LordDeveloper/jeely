<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextMarked
 * @description A marked text.
 *
 * @method string getType() Type of the rich text, always “marked”
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
 * @property string $type Type of the rich text, always “marked”
 * @property RichText $text The text
 *
 * @see https://core.telegram.org/bots/api#richtextmarked
 */
class RichTextMarked extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
    ];
}
