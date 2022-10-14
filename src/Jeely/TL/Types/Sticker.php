<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class Sticker
 * @description This object represents a sticker.
 *
 * @method string getFileId() Identifier for this file, which can be used to download or reuse the file
 * @method string getFileUniqueId() Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @method string getType() Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is independent from its format, which is determined by the fields is_animated and is_video.
 * @method int getWidth() Sticker width
 * @method int getHeight() Sticker height
 * @method bool getIsAnimated() True, if the sticker is animated
 * @method bool getIsVideo() True, if the sticker is a video sticker
 * @method PhotoSize getThumb() Optional. Sticker thumbnail in the .WEBP or .JPG format
 * @method string getEmoji() Optional. Emoji associated with the sticker
 * @method string getSetName() Optional. Name of the sticker set to which the sticker belongs
 * @method File getPremiumAnimation() Optional. For premium regular stickers, premium animation for the sticker
 * @method MaskPosition getMaskPosition() Optional. For mask stickers, the position where the mask should be placed
 * @method string getCustomEmojiId() Optional. For custom emoji stickers, unique identifier of the custom emoji
 * @method int getFileSize() Optional. File size in bytes
 *
 * @method bool isFileId()
 * @method bool isFileUniqueId()
 * @method bool isType()
 * @method bool isWidth()
 * @method bool isHeight()
 * @method bool isIsAnimated()
 * @method bool isIsVideo()
 * @method bool isThumb()
 * @method bool isEmoji()
 * @method bool isSetName()
 * @method bool isPremiumAnimation()
 * @method bool isMaskPosition()
 * @method bool isCustomEmojiId()
 * @method bool isFileSize()
 *
 * @method $this setFileId()
 * @method $this setFileUniqueId()
 * @method $this setType()
 * @method $this setWidth()
 * @method $this setHeight()
 * @method $this setIsAnimated()
 * @method $this setIsVideo()
 * @method $this setThumb()
 * @method $this setEmoji()
 * @method $this setSetName()
 * @method $this setPremiumAnimation()
 * @method $this setMaskPosition()
 * @method $this setCustomEmojiId()
 * @method $this setFileSize()
 *
 * @method $this unsetFileId()
 * @method $this unsetFileUniqueId()
 * @method $this unsetType()
 * @method $this unsetWidth()
 * @method $this unsetHeight()
 * @method $this unsetIsAnimated()
 * @method $this unsetIsVideo()
 * @method $this unsetThumb()
 * @method $this unsetEmoji()
 * @method $this unsetSetName()
 * @method $this unsetPremiumAnimation()
 * @method $this unsetMaskPosition()
 * @method $this unsetCustomEmojiId()
 * @method $this unsetFileSize()
 *
 * @property string $file_id Identifier for this file, which can be used to download or reuse the file
 * @property string $file_unique_id Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
 * @property string $type Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is independent from its format, which is determined by the fields is_animated and is_video.
 * @property int $width Sticker width
 * @property int $height Sticker height
 * @property bool $is_animated True, if the sticker is animated
 * @property bool $is_video True, if the sticker is a video sticker
 * @property PhotoSize $thumb Optional. Sticker thumbnail in the .WEBP or .JPG format
 * @property string $emoji Optional. Emoji associated with the sticker
 * @property string $set_name Optional. Name of the sticker set to which the sticker belongs
 * @property File $premium_animation Optional. For premium regular stickers, premium animation for the sticker
 * @property MaskPosition $mask_position Optional. For mask stickers, the position where the mask should be placed
 * @property string $custom_emoji_id Optional. For custom emoji stickers, unique identifier of the custom emoji
 * @property int $file_size Optional. File size in bytes
 *
 * @see https://core.telegram.org/bots/api#sticker 
 */
class Sticker extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'file_id' => 'string',
		'file_unique_id' => 'string',
		'type' => 'string',
		'width' => 'int',
		'height' => 'int',
		'is_animated' => 'bool',
		'is_video' => 'bool',
		'thumb' => 'PhotoSize',
		'emoji' => 'string',
		'set_name' => 'string',
		'premium_animation' => 'File',
		'mask_position' => 'MaskPosition',
		'custom_emoji_id' => 'string',
		'file_size' => 'int',
	];
}