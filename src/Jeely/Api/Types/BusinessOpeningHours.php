<?php

namespace Jeely\Api\Types;

/**
 * @class BusinessOpeningHours
 * @description Describes the opening hours of a business.
 *
 * @method string getTimeZoneName() Unique name of the time zone for which the opening hours are defined
 * @method BusinessOpeningHoursInterval[] getOpeningHours() List of time intervals describing business opening hours
 *
 * @method bool isTimeZoneName()
 * @method bool isOpeningHours()
 *
 * @method $this setTimeZoneName()
 * @method $this setOpeningHours()
 *
 * @method $this unsetTimeZoneName()
 * @method $this unsetOpeningHours()
 *
 * @property string $time_zone_name Unique name of the time zone for which the opening hours are defined
 * @property BusinessOpeningHoursInterval[] $opening_hours List of time intervals describing business opening hours
 *
 * @see https://core.telegram.org/bots/api#businessopeninghours
 */
class BusinessOpeningHours extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'time_zone_name' => 'string',
        'opening_hours' => 'BusinessOpeningHoursInterval[]',
    ];
}
