<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockDivider
 * @description A divider, corresponding to the HTML tag <hr/>.
 *
 * @method string getType() Type of the block, always “divider”
 *
 * @method bool isType()
 *
 * @method $this setType()
 *
 * @method $this unsetType()
 *
 * @property string $type Type of the block, always “divider”
 *
 * @see https://core.telegram.org/bots/api#inputrichblockdivider
 */
class InputRichBlockDivider extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
    ];
}
