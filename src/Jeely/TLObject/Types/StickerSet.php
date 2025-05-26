<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class StickerSet
* @description This object represents a sticker set.
*
* @property	string $name Sticker set name
* @method	string getName() Sticker set name
* @method	bool isName()
* @method	$this setName()
* @method	$this unsetName()

* @property	string $title Sticker set title
* @method	string getTitle() Sticker set title
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	string $sticker_type Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
* @method	string getStickerType() Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
* @method	bool isStickerType()
* @method	$this setStickerType()
* @method	$this unsetStickerType()

* @property	Sticker[] $stickers List of all set stickers
* @method	Sticker[] getStickers() List of all set stickers
* @method	bool isStickers()
* @method	$this setStickers()
* @method	$this unsetStickers()

* @property	PhotoSize $thumbnail Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
* @method	PhotoSize getThumbnail() Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
* @method	bool isThumbnail()
* @method	$this setThumbnail()
* @method	$this unsetThumbnail()

*/

class StickerSet extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'name'=> 'string',
		'title'=> 'string',
		'sticker_type'=> 'string',
		'stickers'=> 'Sticker[]',
		'thumbnail'=> 'PhotoSize',
	];

}