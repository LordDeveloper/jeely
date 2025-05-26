<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class OwnedGifts
* @description Contains the list of gifts received and owned by a user or a chat.
*
* @property	int $total_count The total number of gifts owned by the user or the chat
* @method	int getTotalCount() The total number of gifts owned by the user or the chat
* @method	bool isTotalCount()
* @method	$this setTotalCount()
* @method	$this unsetTotalCount()

* @property	OwnedGift[] $gifts The list of gifts
* @method	OwnedGift[] getGifts() The list of gifts
* @method	bool isGifts()
* @method	$this setGifts()
* @method	$this unsetGifts()

* @property	string $next_offset Optional. Offset for the next request. If empty, then there are no more results
* @method	string getNextOffset() Optional. Offset for the next request. If empty, then there are no more results
* @method	bool isNextOffset()
* @method	$this setNextOffset()
* @method	$this unsetNextOffset()

*/

class OwnedGifts extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'total_count'=> 'int',
		'gifts'=> 'OwnedGift[]',
		'next_offset'=> 'string',
	];

}