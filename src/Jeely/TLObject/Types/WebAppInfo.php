<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class WebAppInfo
* @description Describes a Web App.
*
* @property	string $url An HTTPS URL of a Web App to be opened with additional data as specified in Initializing Web Apps
* @method	string getUrl() An HTTPS URL of a Web App to be opened with additional data as specified in Initializing Web Apps
* @method	bool isUrl()
* @method	$this setUrl()
* @method	$this unsetUrl()

*/

class WebAppInfo extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'url'=> 'string',
	];

}