<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockCollage
 * @description A collage, corresponding to the custom HTML tag <tg-collage>.
 *
 * @method string getType() Type of the block, always “collage”
 * @method InputRichBlock[] getBlocks() Elements of the collage
 * @method RichBlockCaption getCaption() Optional. Caption of the block
 *
 * @method bool isType()
 * @method bool isBlocks()
 * @method bool isCaption()
 *
 * @method $this setType()
 * @method $this setBlocks()
 * @method $this setCaption()
 *
 * @method $this unsetType()
 * @method $this unsetBlocks()
 * @method $this unsetCaption()
 *
 * @property string $type Type of the block, always “collage”
 * @property InputRichBlock[] $blocks Elements of the collage
 * @property RichBlockCaption $caption Optional. Caption of the block
 *
 * @see https://core.telegram.org/bots/api#inputrichblockcollage
 */
class InputRichBlockCollage extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'blocks' => 'InputRichBlock[]',
        'caption' => 'RichBlockCaption',
    ];
}
