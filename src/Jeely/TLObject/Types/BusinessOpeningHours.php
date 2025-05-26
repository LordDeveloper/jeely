<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BusinessOpeningHours
* @description Describes the opening hours of a business.
*
* @property	string $time_zone_name Unique name of the time zone for which the opening hours are defined
* @method	string getTimeZoneName() Unique name of the time zone for which the opening hours are defined
* @method	bool isTimeZoneName()
* @method	$this setTimeZoneName()
* @method	$this unsetTimeZoneName()

* @property	BusinessOpeningHoursInterval[] $opening_hours List of time intervals describing business opening hours
* @method	BusinessOpeningHoursInterval[] getOpeningHours() List of time intervals describing business opening hours
* @method	bool isOpeningHours()
* @method	$this setOpeningHours()
* @method	$this unsetOpeningHours()

*/

class BusinessOpeningHours extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'time_zone_name'=> 'string',
		'opening_hours'=> 'BusinessOpeningHoursInterval[]',
	];

}