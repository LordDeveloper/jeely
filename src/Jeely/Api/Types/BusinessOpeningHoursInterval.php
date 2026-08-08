<?php

namespace Jeely\Api\Types;

/**
 * @class BusinessOpeningHoursInterval
 * @description Describes an interval of time during which a business is open.
 *
 * @method int getOpeningMinute() The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0 - 7 * 24 * 60
 * @method int getClosingMinute() The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 * 24 * 60
 *
 * @method bool isOpeningMinute()
 * @method bool isClosingMinute()
 *
 * @method $this setOpeningMinute()
 * @method $this setClosingMinute()
 *
 * @method $this unsetOpeningMinute()
 * @method $this unsetClosingMinute()
 *
 * @property int $opening_minute The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0 - 7 * 24 * 60
 * @property int $closing_minute The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 * 24 * 60
 *
 * @see https://core.telegram.org/bots/api#businessopeninghoursinterval
 */
class BusinessOpeningHoursInterval extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'opening_minute' => 'int',
        'closing_minute' => 'int',
    ];
}
