<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockAnimation
 * @description A block with an animation, corresponding to the HTML tag <video>.
 *
 * @method string getType() Type of the block, always “animation”
 * @method InputMediaAnimation getAnimation() The animation. Caption is ignored.
 * @method RichBlockCaption getCaption() Optional. Caption of the block
 *
 * @method bool isType()
 * @method bool isAnimation()
 * @method bool isCaption()
 *
 * @method $this setType()
 * @method $this setAnimation()
 * @method $this setCaption()
 *
 * @method $this unsetType()
 * @method $this unsetAnimation()
 * @method $this unsetCaption()
 *
 * @property string $type Type of the block, always “animation”
 * @property InputMediaAnimation $animation The animation. Caption is ignored.
 * @property RichBlockCaption $caption Optional. Caption of the block
 *
 * @see https://core.telegram.org/bots/api#inputrichblockanimation
 */
class InputRichBlockAnimation extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'animation' => 'InputMediaAnimation',
        'caption' => 'RichBlockCaption',
    ];
}
