<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextAnchorLink
 * @description A link to an anchor.
 *
 * @method string getType() Type of the rich text, always “anchor_link”
 * @method RichText getText() The link text
 * @method string getAnchorName() The name of the anchor. If the name is empty, then the link brings back to the top of the message.
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isAnchorName()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setAnchorName()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetAnchorName()
 *
 * @property string $type Type of the rich text, always “anchor_link”
 * @property RichText $text The link text
 * @property string $anchor_name The name of the anchor. If the name is empty, then the link brings back to the top of the message.
 *
 * @see https://core.telegram.org/bots/api#richtextanchorlink
 */
class RichTextAnchorLink extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'anchor_name' => 'string',
    ];
}
