<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class StoryAreaTypeUniqueGift
* @description Describes a story area pointing to a unique gift. Currently, a story can have at most 1 unique gift area.
*
* @property	string $type Type of the area, always “unique_gift”
* @method	string getType() Type of the area, always “unique_gift”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $name Unique name of the gift
* @method	string getName() Unique name of the gift
* @method	bool isName()
* @method	$this setName()
* @method	$this unsetName()

*/

class StoryAreaTypeUniqueGift extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'name'=> 'string',
	];

}