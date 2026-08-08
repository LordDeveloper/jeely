<?php

namespace Jeely\Api\Types;

/**
 * @class RichBlockListItem
 * @description An item of a list.
 *
 * @method string getLabel() Label of the item
 * @method RichBlock[] getBlocks() The content of the item
 * @method bool getHasCheckbox() Optional. True, if the item has a checkbox
 * @method bool getIsChecked() Optional. True, if the item has a checked checkbox
 * @method int getValue() Optional. For ordered lists, the numeric value of the item label
 * @method string getType() Optional. For ordered lists, the type of the item label; must be one of “a” for lowercase letters, “A” for uppercase letters, “i” for lowercase Roman numerals, “I” for uppercase Roman numerals, or “1” for decimal numbers
 *
 * @method bool isLabel()
 * @method bool isBlocks()
 * @method bool isHasCheckbox()
 * @method bool isIsChecked()
 * @method bool isValue()
 * @method bool isType()
 *
 * @method $this setLabel()
 * @method $this setBlocks()
 * @method $this setHasCheckbox()
 * @method $this setIsChecked()
 * @method $this setValue()
 * @method $this setType()
 *
 * @method $this unsetLabel()
 * @method $this unsetBlocks()
 * @method $this unsetHasCheckbox()
 * @method $this unsetIsChecked()
 * @method $this unsetValue()
 * @method $this unsetType()
 *
 * @property string $label Label of the item
 * @property RichBlock[] $blocks The content of the item
 * @property bool $has_checkbox Optional. True, if the item has a checkbox
 * @property bool $is_checked Optional. True, if the item has a checked checkbox
 * @property int $value Optional. For ordered lists, the numeric value of the item label
 * @property string $type Optional. For ordered lists, the type of the item label; must be one of “a” for lowercase letters, “A” for uppercase letters, “i” for lowercase Roman numerals, “I” for uppercase Roman numerals, or “1” for decimal numbers
 *
 * @see https://core.telegram.org/bots/api#richblocklistitem
 */
class RichBlockListItem extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'label' => 'string',
        'blocks' => 'RichBlock[]',
        'has_checkbox' => 'bool',
        'is_checked' => 'bool',
        'value' => 'int',
        'type' => 'string',
    ];
}
