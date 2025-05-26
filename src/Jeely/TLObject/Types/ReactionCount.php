<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ReactionCount
* @description Represents a reaction added to a message along with the number of times it was added.
*
* @property	ReactionType $type Type of the reaction
* @method	ReactionType getType() Type of the reaction
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int $total_count Number of times the reaction was added
* @method	int getTotalCount() Number of times the reaction was added
* @method	bool isTotalCount()
* @method	$this setTotalCount()
* @method	$this unsetTotalCount()

*/

class ReactionCount extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'ReactionType',
		'total_count'=> 'int',
	];

}