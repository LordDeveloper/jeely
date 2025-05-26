<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputMediaPhoto
* @description Represents a photo to be sent.
*
* @property	string $type Type of the result, must be photo
* @method	string getType() Type of the result, must be photo
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
* @method	string getMedia() File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
* @method	bool isMedia()
* @method	$this setMedia()
* @method	$this unsetMedia()

* @property	string $caption Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
* @method	string getCaption() Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
* @method	bool isCaption()
* @method	$this setCaption()
* @method	$this unsetCaption()

* @property	string $parse_mode Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
* @method	string getParseMode() Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
* @method	bool isParseMode()
* @method	$this setParseMode()
* @method	$this unsetParseMode()

* @property	MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
* @method	MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
* @method	bool isCaptionEntities()
* @method	$this setCaptionEntities()
* @method	$this unsetCaptionEntities()

* @property	bool $show_caption_above_media Optional. Pass True, if the caption must be shown above the message media
* @method	bool getShowCaptionAboveMedia() Optional. Pass True, if the caption must be shown above the message media
* @method	bool isShowCaptionAboveMedia()
* @method	$this setShowCaptionAboveMedia()
* @method	$this unsetShowCaptionAboveMedia()

* @property	bool $has_spoiler Optional. Pass True if the photo needs to be covered with a spoiler animation
* @method	bool getHasSpoiler() Optional. Pass True if the photo needs to be covered with a spoiler animation
* @method	bool isHasSpoiler()
* @method	$this setHasSpoiler()
* @method	$this unsetHasSpoiler()

*/

class InputMediaPhoto extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'media'=> 'string',
		'caption'=> 'string',
		'parse_mode'=> 'string',
		'caption_entities'=> 'MessageEntity[]',
		'show_caption_above_media'=> 'bool',
		'has_spoiler'=> 'bool',
	];

}