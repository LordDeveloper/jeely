<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class StoryAreaTypeLink
* @description Describes a story area pointing to an HTTP or tg:// link. Currently, a story can have up to 3 link areas.
*
* @property	string $type Type of the area, always “link”
* @method	string getType() Type of the area, always “link”
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $url HTTP or tg:// URL to be opened when the area is clicked
* @method	string getUrl() HTTP or tg:// URL to be opened when the area is clicked
* @method	bool isUrl()
* @method	$this setUrl()
* @method	$this unsetUrl()

*/

class StoryAreaTypeLink extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'url'=> 'string',
	];

}