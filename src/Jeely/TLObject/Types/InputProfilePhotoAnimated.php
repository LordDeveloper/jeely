<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputProfilePhotoAnimated
* @description An animated profile photo in the MPEG4 format.
*
* @property	string $type Type of the profile photo, must be animated
* @method	string getType() Type of the profile photo, must be animated
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $animation The animated profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
* @method	string getAnimation() The animated profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass “attach://<file_attach_name>” if the photo was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
* @method	bool isAnimation()
* @method	$this setAnimation()
* @method	$this unsetAnimation()

* @property	float $main_frame_timestamp Optional. Timestamp in seconds of the frame that will be used as the static profile photo. Defaults to 0.0.
* @method	float getMainFrameTimestamp() Optional. Timestamp in seconds of the frame that will be used as the static profile photo. Defaults to 0.0.
* @method	bool isMainFrameTimestamp()
* @method	$this setMainFrameTimestamp()
* @method	$this unsetMainFrameTimestamp()

*/

class InputProfilePhotoAnimated extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'animation'=> 'string',
		'main_frame_timestamp'=> 'float',
	];

}