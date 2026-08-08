<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextBold
 * @description A bold text.
 *
 * @method string getType() Type of the rich text, always “bold”
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
 * @property string $type Type of the rich text, always “bold”
 * @property RichText $text The text
 *
 * @see https://core.telegram.org/bots/api#richtextbold
 */
class RichTextBold extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
    ];
}
