<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockTable
 * @description A table, corresponding to the HTML tag <table>.
 *
 * @method string getType() Type of the block, always “table”
 * @method RichBlockTableCell[][] getCells() Cells of the table
 * @method bool getIsBordered() Optional. Pass True if the table has borders
 * @method bool getIsStriped() Optional. Pass True if the table is striped
 * @method RichText getCaption() Optional. Caption of the table
 *
 * @method bool isType()
 * @method bool isCells()
 * @method bool isIsBordered()
 * @method bool isIsStriped()
 * @method bool isCaption()
 *
 * @method $this setType()
 * @method $this setCells()
 * @method $this setIsBordered()
 * @method $this setIsStriped()
 * @method $this setCaption()
 *
 * @method $this unsetType()
 * @method $this unsetCells()
 * @method $this unsetIsBordered()
 * @method $this unsetIsStriped()
 * @method $this unsetCaption()
 *
 * @property string $type Type of the block, always “table”
 * @property RichBlockTableCell[][] $cells Cells of the table
 * @property bool $is_bordered Optional. Pass True if the table has borders
 * @property bool $is_striped Optional. Pass True if the table is striped
 * @property RichText $caption Optional. Caption of the table
 *
 * @see https://core.telegram.org/bots/api#inputrichblocktable
 */
class InputRichBlockTable extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'cells' => 'RichBlockTableCell[][]',
        'is_bordered' => 'bool',
        'is_striped' => 'bool',
        'caption' => 'RichText',
    ];
}
