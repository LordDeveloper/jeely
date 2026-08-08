<?php

namespace Jeely\Api\Types;

/**
 * @class TextQuote
 * @description This object contains information about the quoted part of a message that is replied to by the given message.
 *
 * @method string getText() Text of the quoted part of a message that is replied to by the given message
 * @method MessageEntity[] getEntities() Optional. Special entities that appear in the quote. Currently, only bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities are kept in quotes.
 * @method int getPosition() Approximate quote position in the original message in UTF-16 code units as specified by the sender
 * @method bool getIsManual() Optional. True, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server.
 *
 * @method bool isText()
 * @method bool isEntities()
 * @method bool isPosition()
 * @method bool isIsManual()
 *
 * @method $this setText()
 * @method $this setEntities()
 * @method $this setPosition()
 * @method $this setIsManual()
 *
 * @method $this unsetText()
 * @method $this unsetEntities()
 * @method $this unsetPosition()
 * @method $this unsetIsManual()
 *
 * @property string $text Text of the quoted part of a message that is replied to by the given message
 * @property MessageEntity[] $entities Optional. Special entities that appear in the quote. Currently, only bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities are kept in quotes.
 * @property int $position Approximate quote position in the original message in UTF-16 code units as specified by the sender
 * @property bool $is_manual Optional. True, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server.
 *
 * @see https://core.telegram.org/bots/api#textquote
 */
class TextQuote extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'text' => 'string',
        'entities' => 'MessageEntity[]',
        'position' => 'int',
        'is_manual' => 'bool',
    ];
}
