<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextSpoiler
 * @description A text covered by a spoiler.
 *
 * @method string getType() Type of the rich text, always “spoiler”
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
 * @property string $type Type of the rich text, always “spoiler”
 * @property RichText $text The text
 *
 * @see https://core.telegram.org/bots/api#richtextspoiler
 */
class RichTextSpoiler extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
    ];
}
