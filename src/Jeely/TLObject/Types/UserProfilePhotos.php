<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class UserProfilePhotos
* @description This object represent a user's profile pictures.
*
* @property	int $total_count Total number of profile pictures the target user has
* @method	int getTotalCount() Total number of profile pictures the target user has
* @method	bool isTotalCount()
* @method	$this setTotalCount()
* @method	$this unsetTotalCount()

* @property	PhotoSize[][] $photos Requested profile pictures (in up to 4 sizes each)
* @method	PhotoSize[][] getPhotos() Requested profile pictures (in up to 4 sizes each)
* @method	bool isPhotos()
* @method	$this setPhotos()
* @method	$this unsetPhotos()

*/

class UserProfilePhotos extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'total_count'=> 'int',
		'photos'=> 'PhotoSize[][]',
	];

}