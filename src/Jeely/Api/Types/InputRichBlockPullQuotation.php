<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockPullQuotation
 * @description A quotation with centered text, loosely corresponding to the HTML tag <aside>.
 *
 * @method string getType() Type of the block, always “pullquote”
 * @method RichText getText() Text of the block
 * @method RichText getCredit() Optional. Credit of the block
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isCredit()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setCredit()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetCredit()
 *
 * @property string $type Type of the block, always “pullquote”
 * @property RichText $text Text of the block
 * @property RichText $credit Optional. Credit of the block
 *
 * @see https://core.telegram.org/bots/api#inputrichblockpullquotation
 */
class InputRichBlockPullQuotation extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'credit' => 'RichText',
    ];
}
