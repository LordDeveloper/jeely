<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class UserProfilePhotos
 * @description This object represent a user's profile pictures.
 *
 * @method int getTotalCount() Total number of profile pictures the target user has
 * @method PhotoSize[][] getPhotos() Requested profile pictures (in up to 4 sizes each)
 *
 * @method bool isTotalCount()
 * @method bool isPhotos()
 *
 * @method $this setTotalCount()
 * @method $this setPhotos()
 *
 * @method $this unsetTotalCount()
 * @method $this unsetPhotos()
 *
 * @property int $total_count Total number of profile pictures the target user has
 * @property PhotoSize[][] $photos Requested profile pictures (in up to 4 sizes each)
 *
 * @see https://core.telegram.org/bots/api#userprofilephotos 
 */
class UserProfilePhotos extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'total_count' => 'int',
		'photos' => 'PhotoSize[][]',
	];
}