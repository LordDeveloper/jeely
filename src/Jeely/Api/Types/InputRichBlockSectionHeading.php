<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockSectionHeading
 * @description A section heading, corresponding to the HTML tags <h1>, <h2>, <h3>, <h4>, <h5>, or <h6>.
 *
 * @method string getType() Type of the block, always “heading”
 * @method RichText getText() Text of the block
 * @method int getSize() Relative size of the text font; 1-6, 1 is the largest, 6 is the smallest
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isSize()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setSize()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetSize()
 *
 * @property string $type Type of the block, always “heading”
 * @property RichText $text Text of the block
 * @property int $size Relative size of the text font; 1-6, 1 is the largest, 6 is the smallest
 *
 * @see https://core.telegram.org/bots/api#inputrichblocksectionheading
 */
class InputRichBlockSectionHeading extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'size' => 'int',
    ];
}
