<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextAnchor
 * @description An anchor.
 *
 * @method string getType() Type of the rich text, always “anchor”
 * @method string getName() The name of the anchor
 *
 * @method bool isType()
 * @method bool isName()
 *
 * @method $this setType()
 * @method $this setName()
 *
 * @method $this unsetType()
 * @method $this unsetName()
 *
 * @property string $type Type of the rich text, always “anchor”
 * @property string $name The name of the anchor
 *
 * @see https://core.telegram.org/bots/api#richtextanchor
 */
class RichTextAnchor extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'name' => 'string',
    ];
}
