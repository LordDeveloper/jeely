<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockDetails
 * @description An expandable block for details disclosure, corresponding to the HTML tag <details>.
 *
 * @method string getType() Type of the block, always “details”
 * @method RichText getSummary() Always shown summary of the block
 * @method InputRichBlock[] getBlocks() Content of the block
 * @method bool getIsOpen() Optional. Pass True if the content of the block is visible by default
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
 * @property InputRichBlock[] $blocks Content of the block
 * @property bool $is_open Optional. Pass True if the content of the block is visible by default
 *
 * @see https://core.telegram.org/bots/api#inputrichblockdetails
 */
class InputRichBlockDetails extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'summary' => 'RichText',
        'blocks' => 'InputRichBlock[]',
        'is_open' => 'bool',
    ];
}
