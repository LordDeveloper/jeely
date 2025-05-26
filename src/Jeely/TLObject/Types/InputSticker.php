<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class InputSticker
* @description This object describes a sticker to be added to a sticker set.
*
* @property	string $sticker The added sticker. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new file using multipart/form-data under <file_attach_name> name. Animated and video stickers can't be uploaded via HTTP URL. More information on Sending Files »
* @method	string getSticker() The added sticker. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new file using multipart/form-data under <file_attach_name> name. Animated and video stickers can't be uploaded via HTTP URL. More information on Sending Files »
* @method	bool isSticker()
* @method	$this setSticker()
* @method	$this unsetSticker()

* @property	string $format Format of the added sticker, must be one of “static” for a .WEBP or .PNG image, “animated” for a .TGS animation, “video” for a .WEBM video
* @method	string getFormat() Format of the added sticker, must be one of “static” for a .WEBP or .PNG image, “animated” for a .TGS animation, “video” for a .WEBM video
* @method	bool isFormat()
* @method	$this setFormat()
* @method	$this unsetFormat()

* @property	string[] $emoji_list List of 1-20 emoji associated with the sticker
* @method	string[] getEmojiList() List of 1-20 emoji associated with the sticker
* @method	bool isEmojiList()
* @method	$this setEmojiList()
* @method	$this unsetEmojiList()

* @property	MaskPosition $mask_position Optional. Position where the mask should be placed on faces. For “mask” stickers only.
* @method	MaskPosition getMaskPosition() Optional. Position where the mask should be placed on faces. For “mask” stickers only.
* @method	bool isMaskPosition()
* @method	$this setMaskPosition()
* @method	$this unsetMaskPosition()

* @property	string[] $keywords Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only.
* @method	string[] getKeywords() Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only.
* @method	bool isKeywords()
* @method	$this setKeywords()
* @method	$this unsetKeywords()

*/

class InputSticker extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'sticker'=> 'string',
		'format'=> 'string',
		'emoji_list'=> 'string[]',
		'mask_position'=> 'MaskPosition',
		'keywords'=> 'string[]',
	];

}