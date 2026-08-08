<?php

namespace Jeely\Api\Types;

/**
 * @class RichBlockDetails
 * @description An expandable block for details disclosure, corresponding to the HTML tag <details>.
 *
 * @method string getType() Type of the block, always “details”
 * @method RichText getSummary() Always shown summary of the block
 * @method RichBlock[] getBlocks() Content of the block
 * @method bool getIsOpen() Optional. True, if the content of the block is visible by default
 *
 * @method bool isType()
 * @method bool isSummary()
 * @method bool isBlocks()
 * @method bool isIsOpen()
 *
 * @method $this setType()
 * @method $this setSummary()
 * @method $this setBlocks()
 * @method $this setIsOpen()
 *
 * @method $this unsetType()
 * @method $this unsetSummary()
 * @method $this unsetBlocks()
 * @method $this unsetIsOpen()
 *
 * @property string $type Type of the block, always “details”
 * @property RichText $summary Always shown summary of the block
 * @property RichBlock[] $blocks Content of the block
 * @property bool $is_open Optional. True, if the content of the block is visible by default
 *
 * @see https://core.telegram.org/bots/api#richblockdetails
 */
class RichBlockDetails extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'summary' => 'RichText',
        'blocks' => 'RichBlock[]',
        'is_open' => 'bool',
    ];
}
