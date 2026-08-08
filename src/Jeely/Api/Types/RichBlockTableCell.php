<?php

namespace Jeely\Api\Types;

/**
 * @class RichBlockTableCell
 * @description Cell in a table.
 *
 * @method RichText getText() Optional. Text in the cell. If omitted, then the cell is invisible.
 * @method bool getIsHeader() Optional. True, if the cell is a header cell
 * @method int getColspan() Optional. The number of columns the cell spans if it is bigger than 1
 * @method int getRowspan() Optional. The number of rows the cell spans if it is bigger than 1
 * @method string getAlign() Horizontal cell content alignment. Currently, must be one of “left”, “center”, or “right”.
 * @method string getValign() Vertical cell content alignment. Currently, must be one of “top”, “middle”, or “bottom”.
 *
 * @method bool isText()
 * @method bool isIsHeader()
 * @method bool isColspan()
 * @method bool isRowspan()
 * @method bool isAlign()
 * @method bool isValign()
 *
 * @method $this setText()
 * @method $this setIsHeader()
 * @method $this setColspan()
 * @method $this setRowspan()
 * @method $this setAlign()
 * @method $this setValign()
 *
 * @method $this unsetText()
 * @method $this unsetIsHeader()
 * @method $this unsetColspan()
 * @method $this unsetRowspan()
 * @method $this unsetAlign()
 * @method $this unsetValign()
 *
 * @property RichText $text Optional. Text in the cell. If omitted, then the cell is invisible.
 * @property bool $is_header Optional. True, if the cell is a header cell
 * @property int $colspan Optional. The number of columns the cell spans if it is bigger than 1
 * @property int $rowspan Optional. The number of rows the cell spans if it is bigger than 1
 * @property string $align Horizontal cell content alignment. Currently, must be one of “left”, “center”, or “right”.
 * @property string $valign Vertical cell content alignment. Currently, must be one of “top”, “middle”, or “bottom”.
 *
 * @see https://core.telegram.org/bots/api#richblocktablecell
 */
class RichBlockTableCell extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'text' => 'RichText',
        'is_header' => 'bool',
        'colspan' => 'int',
        'rowspan' => 'int',
        'align' => 'string',
        'valign' => 'string',
    ];
}
