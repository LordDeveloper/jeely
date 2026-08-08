<?php

namespace Jeely\Api\Types;

/**
 * @class RichBlockParagraph
 * @description A text paragraph, corresponding to the HTML tag <p>.
 *
 * @method string getType() Type of the block, always “paragraph”
 * @method RichText getText() Text of the block
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
 * @property string $type Type of the block, always “paragraph”
 * @property RichText $text Text of the block
 *
 * @see https://core.telegram.org/bots/api#richblockparagraph
 */
class RichBlockParagraph extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
    ];
}
