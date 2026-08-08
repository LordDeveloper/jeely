<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockAudio
 * @description A block with a music file, corresponding to the HTML tag <audio>.
 *
 * @method string getType() Type of the block, always “audio”
 * @method InputMediaAudio getAudio() The audio. Caption is ignored.
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
 * @property InputMediaAudio $audio The audio. Caption is ignored.
 * @property RichBlockCaption $caption Optional. Caption of the block
 *
 * @see https://core.telegram.org/bots/api#inputrichblockaudio
 */
class InputRichBlockAudio extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'audio' => 'InputMediaAudio',
        'caption' => 'RichBlockCaption',
    ];
}
