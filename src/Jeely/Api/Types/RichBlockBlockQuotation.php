<?php

namespace Jeely\Api\Types;

/**
 * @class RichBlockBlockQuotation
 * @description A block quotation, corresponding to the HTML tag <blockquote>.
 *
 * @method string getType() Type of the block, always “blockquote”
 * @method RichBlock[] getBlocks() Content of the block
 * @method RichText getCredit() Optional. Credit of the block
 *
 * @method bool isType()
 * @method bool isBlocks()
 * @method bool isCredit()
 *
 * @method $this setType()
 * @method $this setBlocks()
 * @method $this setCredit()
 *
 * @method $this unsetType()
 * @method $this unsetBlocks()
 * @method $this unsetCredit()
 *
 * @property string $type Type of the block, always “blockquote”
 * @property RichBlock[] $blocks Content of the block
 * @property RichText $credit Optional. Credit of the block
 *
 * @see https://core.telegram.org/bots/api#richblockblockquotation
 */
class RichBlockBlockQuotation extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'blocks' => 'RichBlock[]',
        'credit' => 'RichText',
    ];
}
