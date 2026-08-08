<?php

namespace Jeely\Api\Types;

/**
 * @class StickerSet
 * @description This object represents a sticker set.
 *
 * @method string getName() Sticker set name
 * @method string getTitle() Sticker set title
 * @method string getStickerType() Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
 * @method Sticker[] getStickers() List of all set stickers
 * @method PhotoSize getThumbnail() Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
 *
 * @method bool isName()
 * @method bool isTitle()
 * @method bool isStickerType()
 * @method bool isStickers()
 * @method bool isThumbnail()
 *
 * @method $this setName()
 * @method $this setTitle()
 * @method $this setStickerType()
 * @method $this setStickers()
 * @method $this setThumbnail()
 *
 * @method $this unsetName()
 * @method $this unsetTitle()
 * @method $this unsetStickerType()
 * @method $this unsetStickers()
 * @method $this unsetThumbnail()
 *
 * @property string $name Sticker set name
 * @property string $title Sticker set title
 * @property string $sticker_type Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
 * @property Sticker[] $stickers List of all set stickers
 * @property PhotoSize $thumbnail Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
 *
 * @see https://core.telegram.org/bots/api#stickerset
 */
class StickerSet extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'name' => 'string',
        'title' => 'string',
        'sticker_type' => 'string',
        'stickers' => 'Sticker[]',
        'thumbnail' => 'PhotoSize',
    ];
}
