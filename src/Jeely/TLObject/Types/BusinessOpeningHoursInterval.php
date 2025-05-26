<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BusinessOpeningHoursInterval
* @description Describes an interval of time during which a business is open.
*
* @property	int $opening_minute The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0 - 7 * 24 * 60
* @method	int getOpeningMinute() The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0 - 7 * 24 * 60
* @method	bool isOpeningMinute()
* @method	$this setOpeningMinute()
* @method	$this unsetOpeningMinute()

* @property	int $closing_minute The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 * 24 * 60
* @method	int getClosingMinute() The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 * 24 * 60
* @method	bool isClosingMinute()
* @method	$this setClosingMinute()
* @method	$this unsetClosingMinute()

*/

class BusinessOpeningHoursInterval extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'opening_minute'=> 'int',
		'closing_minute'=> 'int',
	];

}