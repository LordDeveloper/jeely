<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputMediaAudio
* @description Represents an audio file to be treated as music to be sent.
*
* @property	string $type Type of the result, must be audio
* @method	string getType() Type of the result, must be audio
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

* @property	string $caption Optional. Caption of the audio to be sent, 0-1024 characters after entities parsing
* @method	string getCaption() Optional. Caption of the audio to be sent, 0-1024 characters after entities parsing
* @method	bool isCaption()
* @method	$this setCaption()
* @method	$this unsetCaption()

* @property	string $parse_mode Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
* @method	string getParseMode() Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
* @method	bool isParseMode()
* @method	$this setParseMode()
* @method	$this unsetParseMode()

* @property	MessageEntity[] $caption_entities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
* @method	MessageEntity[] getCaptionEntities() Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
* @method	bool isCaptionEntities()
* @method	$this setCaptionEntities()
* @method	$this unsetCaptionEntities()

* @property	int $duration Optional. Duration of the audio in seconds
* @method	int getDuration() Optional. Duration of the audio in seconds
* @method	bool isDuration()
* @method	$this setDuration()
* @method	$this unsetDuration()

* @property	string $performer Optional. Performer of the audio
* @method	string getPerformer() Optional. Performer of the audio
* @method	bool isPerformer()
* @method	$this setPerformer()
* @method	$this unsetPerformer()

* @property	string $title Optional. Title of the audio
* @method	string getTitle() Optional. Title of the audio
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

*/

class InputMediaAudio extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'type'=> 'string',
		'media'=> 'string',
		'thumbnail'=> 'string',
		'caption'=> 'string',
		'parse_mode'=> 'string',
		'caption_entities'=> 'MessageEntity[]',
		'duration'=> 'int',
		'performer'=> 'string',
		'title'=> 'string',
	];

}