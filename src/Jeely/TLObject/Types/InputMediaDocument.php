<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputMediaDocument
* @description Represents a general file to be sent.
*
* @property	string $type Type of the result, must be document
* @method	string getType() Type of the result, must be document
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
* @method	string getMedia() File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
* @method	bool isMedia()
* @method	$this setMedia()
* @method	$this unsetMedia()

* @property	string $thumbnail Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
* @method	string getThumbnail() Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
* @method	bool isThumbnail()
* @method	$this setThumbnail()
* @method	$this unsetThumbnail()

* @property	string $caption Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
* @method	string getCaption() Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
* @method	bool isCaption()
* @method	$this setCaption()
* @method	$this unsetCaption()

* @property	string $parse_mode Optional. Mode for parsing entities in the document caption. See formatting options for more details.
* @method	string getParseMode() Optional. Mode for parsing entities in the document caption. See formatting options for more details.
* @method	bool isParseMode()
* @method	$this setParseMode()
* @method	$this unsetParseMode()

* @property	MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
* @method	MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
* @method	bool isCaptionEntities()
* @method	$this setCaptionEntities()
* @method	$this unsetCaptionEntities()

* @property	bool $disable_content_type_detection Optional. Disables automatic server-side content type detection for files uploaded using multipart/form-data. Always True, if the document is sent as part of an album.
* @method	bool getDisableContentTypeDetection() Optional. Disables automatic server-side content type detection for files uploaded using multipart/form-data. Always True, if the document is sent as part of an album.
* @method	bool isDisableContentTypeDetection()
* @method	$this setDisableContentTypeDetection()
* @method	$this unsetDisableContentTypeDetection()

*/

class InputMediaDocument extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'media'=> 'string',
		'thumbnail'=> 'string',
		'caption'=> 'string',
		'parse_mode'=> 'string',
		'caption_entities'=> 'MessageEntity[]',
		'disable_content_type_detection'=> 'bool',
	];

}