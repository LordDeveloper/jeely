<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextDateTime
 * @description Formatted date and time.
 *
 * @method string getType() Type of the rich text, always “date_time”
 * @method RichText getText() The text
 * @method int getUnixTime() The Unix time associated with the entity
 * @method string getDateTimeFormat() The string that defines the formatting of the date and time. See date-time entity formatting for more details.
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isUnixTime()
 * @method bool isDateTimeFormat()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setUnixTime()
 * @method $this setDateTimeFormat()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetUnixTime()
 * @method $this unsetDateTimeFormat()
 *
 * @property string $type Type of the rich text, always “date_time”
 * @property RichText $text The text
 * @property int $unix_time The Unix time associated with the entity
 * @property string $date_time_format The string that defines the formatting of the date and time. See date-time entity formatting for more details.
 *
 * @see https://core.telegram.org/bots/api#richtextdatetime
 */
class RichTextDateTime extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'unix_time' => 'int',
        'date_time_format' => 'string',
    ];
}
