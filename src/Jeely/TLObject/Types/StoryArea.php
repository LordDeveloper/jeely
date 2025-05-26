<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class StoryArea
* @description Describes a clickable area on a story media.
*
* @property	StoryAreaPosition $position Position of the area
* @method	StoryAreaPosition getPosition() Position of the area
* @method	bool isPosition()
* @method	$this setPosition()
* @method	$this unsetPosition()

* @property	StoryAreaType $type Type of the area
* @method	StoryAreaType getType() Type of the area
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

*/

class StoryArea extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'position'=> 'StoryAreaPosition',
		'type'=> 'StoryAreaType',
	];

}