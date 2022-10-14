<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class StickerSet
 * @description This object represents a sticker set.
 *
 * @method string getName() Sticker set name
 * @method string getTitle() Sticker set title
 * @method string getStickerType() Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
 * @method bool getIsAnimated() True, if the sticker set contains animated stickers
 * @method bool getIsVideo() True, if the sticker set contains video stickers
 * @method Sticker[] getStickers() List of all set stickers
 * @method PhotoSize getThumb() Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
 *
 * @method bool isName()
 * @method bool isTitle()
 * @method bool isStickerType()
 * @method bool isIsAnimated()
 * @method bool isIsVideo()
 * @method bool isStickers()
 * @method bool isThumb()
 *
 * @method $this setName()
 * @method $this setTitle()
 * @method $this setStickerType()
 * @method $this setIsAnimated()
 * @method $this setIsVideo()
 * @method $this setStickers()
 * @method $this setThumb()
 *
 * @method $this unsetName()
 * @method $this unsetTitle()
 * @method $this unsetStickerType()
 * @method $this unsetIsAnimated()
 * @method $this unsetIsVideo()
 * @method $this unsetStickers()
 * @method $this unsetThumb()
 *
 * @property string $name Sticker set name
 * @property string $title Sticker set title
 * @property string $sticker_type Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
 * @property bool $is_animated True, if the sticker set contains animated stickers
 * @property bool $is_video True, if the sticker set contains video stickers
 * @property Sticker[] $stickers List of all set stickers
 * @property PhotoSize $thumb Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
 *
 * @see https://core.telegram.org/bots/api#stickerset 
 */
class StickerSet extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'name' => 'string',
		'title' => 'string',
		'sticker_type' => 'string',
		'is_animated' => 'bool',
		'is_video' => 'bool',
		'stickers' => 'Sticker[]',
		'thumb' => 'PhotoSize',
	];
}