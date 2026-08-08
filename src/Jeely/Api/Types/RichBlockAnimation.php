<?php

namespace Jeely\Api\Types;

/**
 * @class RichBlockAnimation
 * @description A block with an animation, corresponding to the HTML tag <video>.
 *
 * @method string getType() Type of the block, always “animation”
 * @method Animation getAnimation() The animation
 * @method bool getHasSpoiler() Optional. True, if the media preview is covered by a spoiler animation
 * @method RichBlockCaption getCaption() Optional. Caption of the block
 *
 * @method bool isType()
 * @method bool isAnimation()
 * @method bool isHasSpoiler()
 * @method bool isCaption()
 *
 * @method $this setType()
 * @method $this setAnimation()
 * @method $this setHasSpoiler()
 * @method $this setCaption()
 *
 * @method $this unsetType()
 * @method $this unsetAnimation()
 * @method $this unsetHasSpoiler()
 * @method $this unsetCaption()
 *
 * @property string $type Type of the block, always “animation”
 * @property Animation $animation The animation
 * @property bool $has_spoiler Optional. True, if the media preview is covered by a spoiler animation
 * @property RichBlockCaption $caption Optional. Caption of the block
 *
 * @see https://core.telegram.org/bots/api#richblockanimation
 */
class RichBlockAnimation extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'animation' => 'Animation',
        'has_spoiler' => 'bool',
        'caption' => 'RichBlockCaption',
    ];
}
