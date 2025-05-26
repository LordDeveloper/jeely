<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class LinkPreviewOptions
* @description Describes the options used for link preview generation.
*
* @property	bool $is_disabled Optional. True, if the link preview is disabled
* @method	bool getIsDisabled() Optional. True, if the link preview is disabled
* @method	bool isIsDisabled()
* @method	$this setIsDisabled()
* @method	$this unsetIsDisabled()

* @property	string $url Optional. URL to use for the link preview. If empty, then the first URL found in the message text will be used
* @method	string getUrl() Optional. URL to use for the link preview. If empty, then the first URL found in the message text will be used
* @method	bool isUrl()
* @method	$this setUrl()
* @method	$this unsetUrl()

* @property	bool $prefer_small_media Optional. True, if the media in the link preview is supposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
* @method	bool getPreferSmallMedia() Optional. True, if the media in the link preview is supposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
* @method	bool isPreferSmallMedia()
* @method	$this setPreferSmallMedia()
* @method	$this unsetPreferSmallMedia()

* @property	bool $prefer_large_media Optional. True, if the media in the link preview is supposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
* @method	bool getPreferLargeMedia() Optional. True, if the media in the link preview is supposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
* @method	bool isPreferLargeMedia()
* @method	$this setPreferLargeMedia()
* @method	$this unsetPreferLargeMedia()

* @property	bool $show_above_text Optional. True, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text
* @method	bool getShowAboveText() Optional. True, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text
* @method	bool isShowAboveText()
* @method	$this setShowAboveText()
* @method	$this unsetShowAboveText()

*/

class LinkPreviewOptions extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'is_disabled'=> 'bool',
		'url'=> 'string',
		'prefer_small_media'=> 'bool',
		'prefer_large_media'=> 'bool',
		'show_above_text'=> 'bool',
	];

}