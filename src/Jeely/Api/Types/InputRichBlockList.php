<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockList
 * @description A list of blocks, corresponding to the HTML tag <ul> or <ol> with multiple nested tags <li>.
 *
 * @method string getType() Type of the block, always “list”
 * @method InputRichBlockListItem[] getItems() Items of the list
 *
 * @method bool isType()
 * @method bool isItems()
 *
 * @method $this setType()
 * @method $this setItems()
 *
 * @method $this unsetType()
 * @method $this unsetItems()
 *
 * @property string $type Type of the block, always “list”
 * @property InputRichBlockListItem[] $items Items of the list
 *
 * @see https://core.telegram.org/bots/api#inputrichblocklist
 */
class InputRichBlockList extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'items' => 'InputRichBlockListItem[]',
    ];
}
