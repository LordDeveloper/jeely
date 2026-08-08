<?php

namespace Jeely\Api\Types;

/**
 * @class InputPollOption
 * @description This object contains information about one answer option in a poll to be sent.
 *
 * @method string getText() Option text, 1-100 characters
 * @method string getTextParseMode() Optional. Mode for parsing entities in the text. See formatting options for more details. Currently, only custom emoji entities are allowed.
 * @method MessageEntity[] getTextEntities() Optional. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of text_parse_mode.
 * @method InputPollOptionMedia getMedia() Optional. Media added to the poll option
 *
 * @method bool isText()
 * @method bool isTextParseMode()
 * @method bool isTextEntities()
 * @method bool isMedia()
 *
 * @method $this setText()
 * @method $this setTextParseMode()
 * @method $this setTextEntities()
 * @method $this setMedia()
 *
 * @method $this unsetText()
 * @method $this unsetTextParseMode()
 * @method $this unsetTextEntities()
 * @method $this unsetMedia()
 *
 * @property string $text Option text, 1-100 characters
 * @property string $text_parse_mode Optional. Mode for parsing entities in the text. See formatting options for more details. Currently, only custom emoji entities are allowed.
 * @property MessageEntity[] $text_entities Optional. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of text_parse_mode.
 * @property InputPollOptionMedia $media Optional. Media added to the poll option
 *
 * @see https://core.telegram.org/bots/api#inputpolloption
 */
class InputPollOption extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'text' => 'string',
        'text_parse_mode' => 'string',
        'text_entities' => 'MessageEntity[]',
        'media' => 'InputPollOptionMedia',
    ];
}
