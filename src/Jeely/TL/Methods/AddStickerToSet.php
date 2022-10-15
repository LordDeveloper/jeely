<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\InputFile;
use Jeely\TL\Types\MaskPosition;

/**
 * @class AddStickerToSet
 * @description Use this method to add a new sticker to a set created by the bot. You must use exactly one of the fields png_sticker, tgs_sticker, or webm_sticker. Animated stickers can be added to animated sticker sets and only to them. Animated sticker sets can have up to 50 stickers. Static sticker sets can have up to 120 stickers. Returns True on success.
 *
 * @property int $user_id User identifier of sticker set owner
 * @property string $name Sticker set name
 * @property InputFile|string $png_sticker PNG image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More information on Sending Files »
 * @property InputFile $tgs_sticker TGS animation with the sticker, uploaded using multipart/form-data. See https://core.telegram.org/stickers#animated-sticker-requirements for technical requirements
 * @property InputFile $webm_sticker WEBM video with the sticker, uploaded using multipart/form-data. See https://core.telegram.org/stickers#video-sticker-requirements for technical requirements
 * @property string $emojis One or more emoji corresponding to the sticker
 * @property MaskPosition $mask_position A JSON-serialized object for position where the mask should be placed on faces
 *
 * @see https://api.telegram.org/bots/api#addstickertoset
 */
class AddStickerToSet extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'bool';

    /**
     * @var array $params The value that are taken in the constructor method as method parameters.
     */
    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return bool
     */
    public function __invoke()
    {
        return $this->call();
    }
}