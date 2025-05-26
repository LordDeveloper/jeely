<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputProfilePhotoStatic
* @description A static profile photo in the .JPG format.
*
* @property	string $type Type of the profile photo, must be static
* @method	string getType() Type of the profile photo, must be static
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $photo The static profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
* @method	string getPhoto() The static profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
* @method	bool isPhoto()
* @method	$this setPhoto()
* @method	$this unsetPhoto()

*/

class InputProfilePhotoStatic extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'photo'=> 'string',
	];

}