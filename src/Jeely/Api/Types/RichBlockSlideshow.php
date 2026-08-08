<?php

namespace Jeely\Api\Types;

/**
 * @class RichBlockSlideshow
 * @description A slideshow, corresponding to the custom HTML tag <tg-slideshow>.
 *
 * @method string getType() Type of the block, always “slideshow”
 * @method RichBlock[] getBlocks() Elements of the slideshow
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
 * @property string $type Type of the block, always “slideshow”
 * @property RichBlock[] $blocks Elements of the slideshow
 * @property RichBlockCaption $caption Optional. Caption of the block
 *
 * @see https://core.telegram.org/bots/api#richblockslideshow
 */
class RichBlockSlideshow extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'blocks' => 'RichBlock[]',
        'caption' => 'RichBlockCaption',
    ];
}
