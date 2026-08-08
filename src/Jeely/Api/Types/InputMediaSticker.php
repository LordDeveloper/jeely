<?php

namespace Jeely\Api\Types;

/**
 * @class InputMediaSticker
 * @description Represents a sticker file to be sent.
 *
 * @method string getType() Type of the media, must be sticker
 * @method string getMedia() File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a .WEBP sticker from the Internet, or pass “attach://<file_attach_name>” to upload a new .WEBP, .TGS, or .WEBM sticker using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @method string getEmoji() Optional. Emoji associated with the sticker; only for just uploaded stickers
 *
 * @method bool isType()
 * @method bool isMedia()
 * @method bool isEmoji()
 *
 * @method $this setType()
 * @method $this setMedia()
 * @method $this setEmoji()
 *
 * @method $this unsetType()
 * @method $this unsetMedia()
 * @method $this unsetEmoji()
 *
 * @property string $type Type of the media, must be sticker
 * @property string $media File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a .WEBP sticker from the Internet, or pass “attach://<file_attach_name>” to upload a new .WEBP, .TGS, or .WEBM sticker using multipart/form-data under <file_attach_name> name. More information on Sending Files »
 * @property string $emoji Optional. Emoji associated with the sticker; only for just uploaded stickers
 *
 * @see https://core.telegram.org/bots/api#inputmediasticker
 */
class InputMediaSticker extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'media' => 'string',
        'emoji' => 'string',
    ];
}
