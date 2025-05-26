<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Sticker
* @description This object represents a sticker.
*
* @property	string $file_id Identifier for this file, which can be used to download or reuse the file
* @method	string getFileId() Identifier for this file, which can be used to download or reuse the file
* @method	bool isFileId()
* @method	$this setFileId()
* @method	$this unsetFileId()

* @property	string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
* @method	string getFileUniqueId() Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
* @method	bool isFileUniqueId()
* @method	$this setFileUniqueId()
* @method	$this unsetFileUniqueId()

* @property	string $type Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is independent from its format, which is determined by the fields is_animated and is_video.
* @method	string getType() Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is independent from its format, which is determined by the fields is_animated and is_video.
* @method	bool isType()
* @method	$this setType()
* @method	$this unsetType()

* @property	int $width Sticker width
* @method	int getWidth() Sticker width
* @method	bool isWidth()
* @method	$this setWidth()
* @method	$this unsetWidth()

* @property	int $height Sticker height
* @method	int getHeight() Sticker height
* @method	bool isHeight()
* @method	$this setHeight()
* @method	$this unsetHeight()

* @property	bool $is_animated True, if the sticker is animated
* @method	bool getIsAnimated() True, if the sticker is animated
* @method	bool isIsAnimated()
* @method	$this setIsAnimated()
* @method	$this unsetIsAnimated()

* @property	bool $is_video True, if the sticker is a video sticker
* @method	bool getIsVideo() True, if the sticker is a video sticker
* @method	bool isIsVideo()
* @method	$this setIsVideo()
* @method	$this unsetIsVideo()

* @property	PhotoSize $thumbnail Optional. Sticker thumbnail in the .WEBP or .JPG format
* @method	PhotoSize getThumbnail() Optional. Sticker thumbnail in the .WEBP or .JPG format
* @method	bool isThumbnail()
* @method	$this setThumbnail()
* @method	$this unsetThumbnail()

* @property	string $emoji Optional. Emoji associated with the sticker
* @method	string getEmoji() Optional. Emoji associated with the sticker
* @method	bool isEmoji()
* @method	$this setEmoji()
* @method	$this unsetEmoji()

* @property	string $set_name Optional. Name of the sticker set to which the sticker belongs
* @method	string getSetName() Optional. Name of the sticker set to which the sticker belongs
* @method	bool isSetName()
* @method	$this setSetName()
* @method	$this unsetSetName()

* @property	File $premium_animation Optional. For premium regular stickers, premium animation for the sticker
* @method	File getPremiumAnimation() Optional. For premium regular stickers, premium animation for the sticker
* @method	bool isPremiumAnimation()
* @method	$this setPremiumAnimation()
* @method	$this unsetPremiumAnimation()

* @property	MaskPosition $mask_position Optional. For mask stickers, the position where the mask should be placed
* @method	MaskPosition getMaskPosition() Optional. For mask stickers, the position where the mask should be placed
* @method	bool isMaskPosition()
* @method	$this setMaskPosition()
* @method	$this unsetMaskPosition()

* @property	string $custom_emoji_id Optional. For custom emoji stickers, unique identifier of the custom emoji
* @method	string getCustomEmojiId() Optional. For custom emoji stickers, unique identifier of the custom emoji
* @method	bool isCustomEmojiId()
* @method	$this setCustomEmojiId()
* @method	$this unsetCustomEmojiId()

* @property	bool $needs_repainting Optional. True, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
* @method	bool getNeedsRepainting() Optional. True, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
* @method	bool isNeedsRepainting()
* @method	$this setNeedsRepainting()
* @method	$this unsetNeedsRepainting()

* @property	int $file_size Optional. File size in bytes
* @method	int getFileSize() Optional. File size in bytes
* @method	bool isFileSize()
* @method	$this setFileSize()
* @method	$this unsetFileSize()

*/

class Sticker extends TLObject
{
	use \Jeely\Concerns\InteractsWithMedia;

	const JSON_PROPERTY_MAP = [
		'file_id'=> 'string',
		'file_unique_id'=> 'string',
		'type'=> 'string',
		'width'=> 'int',
		'height'=> 'int',
		'is_animated'=> 'bool',
		'is_video'=> 'bool',
		'thumbnail'=> 'PhotoSize',
		'emoji'=> 'string',
		'set_name'=> 'string',
		'premium_animation'=> 'File',
		'mask_position'=> 'MaskPosition',
		'custom_emoji_id'=> 'string',
		'needs_repainting'=> 'bool',
		'file_size'=> 'int',
	];

}