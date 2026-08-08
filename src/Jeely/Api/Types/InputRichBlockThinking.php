<?php

namespace Jeely\Api\Types;

/**
 * @class InputRichBlockThinking
 * @description A block with a “Thinking…” placeholder, corresponding to the custom HTML tag <tg-thinking>. The block may be used only in sendRichMessageDraft, therefore it can't be received in messages. See https://t.me/addemoji/AIActions for examples of custom emoji that are recommended for usage in the block.
 *
 * @method string getType() Type of the block, always “thinking”
 * @method RichText getText() Text of the block. See https://t.me/addemoji/AIActions for examples of custom emoji that are recommended for usage in the block.
 *
 * @method bool isType()
 * @method bool isText()
 *
 * @method $this setType()
 * @method $this setText()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 *
 * @property string $type Type of the block, always “thinking”
 * @property RichText $text Text of the block. See https://t.me/addemoji/AIActions for examples of custom emoji that are recommended for usage in the block.
 *
 * @see https://core.telegram.org/bots/api#inputrichblockthinking
 */
class InputRichBlockThinking extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
    ];
}
