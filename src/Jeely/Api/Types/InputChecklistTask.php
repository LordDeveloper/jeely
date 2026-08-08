<?php

namespace Jeely\Api\Types;

/**
 * @class InputChecklistTask
 * @description Describes a task to add to a checklist.
 *
 * @method int getId() Unique identifier of the task; must be positive and unique among all task identifiers currently present in the checklist
 * @method string getText() Text of the task; 1-100 characters after entities parsing
 * @method string getParseMode() Optional. Mode for parsing entities in the text. See formatting options for more details.
 * @method MessageEntity[] getTextEntities() Optional. List of special entities that appear in the text, which can be specified instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities are allowed.
 *
 * @method bool isId()
 * @method bool isText()
 * @method bool isParseMode()
 * @method bool isTextEntities()
 *
 * @method $this setId()
 * @method $this setText()
 * @method $this setParseMode()
 * @method $this setTextEntities()
 *
 * @method $this unsetId()
 * @method $this unsetText()
 * @method $this unsetParseMode()
 * @method $this unsetTextEntities()
 *
 * @property int $id Unique identifier of the task; must be positive and unique among all task identifiers currently present in the checklist
 * @property string $text Text of the task; 1-100 characters after entities parsing
 * @property string $parse_mode Optional. Mode for parsing entities in the text. See formatting options for more details.
 * @property MessageEntity[] $text_entities Optional. List of special entities that appear in the text, which can be specified instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities are allowed.
 *
 * @see https://core.telegram.org/bots/api#inputchecklisttask
 */
class InputChecklistTask extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'id' => 'int',
        'text' => 'string',
        'parse_mode' => 'string',
        'text_entities' => 'MessageEntity[]',
    ];
}
