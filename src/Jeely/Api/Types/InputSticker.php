<?php

namespace Jeely\Api\Types;

/**
 * @class InputSticker
 * @description This object describes a sticker to be added to a sticker set.
 *
 * @method string getSticker() The added sticker. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new file using multipart/form-data under <file_attach_name> name. Animated and video stickers can't be uploaded via HTTP URL. More information on Sending Files »
 * @method string getFormat() Format of the added sticker, must be one of “static” for a .WEBP or .PNG image, “animated” for a .TGS animation, “video” for a .WEBM video
 * @method string[] getEmojiList() List of 1-20 emoji associated with the sticker
 * @method MaskPosition getMaskPosition() Optional. Position where the mask should be placed on faces. For “mask” stickers only.
 * @method string[] getKeywords() Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only.
 *
 * @method bool isSticker()
 * @method bool isFormat()
 * @method bool isEmojiList()
 * @method bool isMaskPosition()
 * @method bool isKeywords()
 *
 * @method $this setSticker()
 * @method $this setFormat()
 * @method $this setEmojiList()
 * @method $this setMaskPosition()
 * @method $this setKeywords()
 *
 * @method $this unsetSticker()
 * @method $this unsetFormat()
 * @method $this unsetEmojiList()
 * @method $this unsetMaskPosition()
 * @method $this unsetKeywords()
 *
 * @property string $sticker The added sticker. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new file using multipart/form-data under <file_attach_name> name. Animated and video stickers can't be uploaded via HTTP URL. More information on Sending Files »
 * @property string $format Format of the added sticker, must be one of “static” for a .WEBP or .PNG image, “animated” for a .TGS animation, “video” for a .WEBM video
 * @property string[] $emoji_list List of 1-20 emoji associated with the sticker
 * @property MaskPosition $mask_position Optional. Position where the mask should be placed on faces. For “mask” stickers only.
 * @property string[] $keywords Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only.
 *
 * @see https://core.telegram.org/bots/api#inputsticker
 */
class InputSticker extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'sticker' => 'string',
        'format' => 'string',
        'emoji_list' => 'string[]',
        'mask_position' => 'MaskPosition',
        'keywords' => 'string[]',
    ];
}
