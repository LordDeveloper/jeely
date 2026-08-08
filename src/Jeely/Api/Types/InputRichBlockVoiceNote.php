<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockVoiceNote
 * @description A block with a voice note, corresponding to the HTML tag <audio>.
 *
 * @method string getType() Type of the block, always “voice_note”
 * @method InputMediaVoiceNote getVoiceNote() The voice note. Caption is ignored.
 * @method RichBlockCaption getCaption() Optional. Caption of the block
 *
 * @method bool isType()
 * @method bool isVoiceNote()
 * @method bool isCaption()
 *
 * @method $this setType()
 * @method $this setVoiceNote()
 * @method $this setCaption()
 *
 * @method $this unsetType()
 * @method $this unsetVoiceNote()
 * @method $this unsetCaption()
 *
 * @property string $type Type of the block, always “voice_note”
 * @property InputMediaVoiceNote $voice_note The voice note. Caption is ignored.
 * @property RichBlockCaption $caption Optional. Caption of the block
 *
 * @see https://core.telegram.org/bots/api#inputrichblockvoicenote
 */
class InputRichBlockVoiceNote extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'voice_note' => 'InputMediaVoiceNote',
        'caption' => 'RichBlockCaption',
    ];
}
