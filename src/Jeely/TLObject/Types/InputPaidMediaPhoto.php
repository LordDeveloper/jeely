<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputPaidMediaPhoto
* @description The paid media to send is a photo.
*
* @property	string $type Type of the media, must be photo
* @method	string getType() Type of the media, must be photo
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
* @method	string getMedia() File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
* @method	bool isMedia()
* @method	$this setMedia()
* @method	$this unsetMedia()

*/

class InputPaidMediaPhoto extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'media'=> 'string',
	];

}