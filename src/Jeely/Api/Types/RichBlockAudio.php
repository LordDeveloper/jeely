<?php

namespace Jeely\Api\Types;

/**
 * @class RichBlockAudio
 * @description A block with a music file, corresponding to the HTML tag <audio>.
 *
 * @method string getType() Type of the block, always “audio”
 * @method Audio getAudio() The audio
 * @method RichBlockCaption getCaption() Optional. Caption of the block
 *
 * @method bool isType()
 * @method bool isAudio()
 * @method bool isCaption()
 *
 * @method $this setType()
 * @method $this setAudio()
 * @method $this setCaption()
 *
 * @method $this unsetType()
 * @method $this unsetAudio()
 * @method $this unsetCaption()
 *
 * @property string $type Type of the block, always “audio”
 * @property Audio $audio The audio
 * @property RichBlockCaption $caption Optional. Caption of the block
 *
 * @see https://core.telegram.org/bots/api#richblockaudio
 */
class RichBlockAudio extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'audio' => 'Audio',
        'caption' => 'RichBlockCaption',
    ];
}
