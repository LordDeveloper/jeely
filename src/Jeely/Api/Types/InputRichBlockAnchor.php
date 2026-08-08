<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockAnchor
 * @description A block with an anchor, corresponding to the HTML tag <a> with the attribute name.
 *
 * @method string getType() Type of the block, always “anchor”
 * @method string getName() The name of the anchor
 *
 * @method bool isType()
 * @method bool isName()
 *
 * @method $this setType()
 * @method $this setName()
 *
 * @method $this unsetType()
 * @method $this unsetName()
 *
 * @property string $type Type of the block, always “anchor”
 * @property string $name The name of the anchor
 *
 * @see https://core.telegram.org/bots/api#inputrichblockanchor
 */
class InputRichBlockAnchor extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'name' => 'string',
    ];
}
