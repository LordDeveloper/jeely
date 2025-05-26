<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputStoryContentPhoto
* @description Describes a photo to post as a story.
*
* @property	string $type Type of the content, must be photo
* @method	string getType() Type of the content, must be photo
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $photo The photo to post as a story. The photo must be of the size 1080x1920 and must not exceed 10 MB. The photo can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
* @method	string getPhoto() The photo to post as a story. The photo must be of the size 1080x1920 and must not exceed 10 MB. The photo can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
* @method	bool isPhoto()
* @method	$this setPhoto()
* @method	$this unsetPhoto()

*/

class InputStoryContentPhoto extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'photo'=> 'string',
	];

}