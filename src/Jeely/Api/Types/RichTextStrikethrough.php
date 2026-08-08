<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextStrikethrough
 * @description A strikethrough text.
 *
 * @method string getType() Type of the rich text, always “strikethrough”
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
 * @property string $type Type of the rich text, always “strikethrough”
 * @property RichText $text The text
 *
 * @see https://core.telegram.org/bots/api#richtextstrikethrough
 */
class RichTextStrikethrough extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
    ];
}
