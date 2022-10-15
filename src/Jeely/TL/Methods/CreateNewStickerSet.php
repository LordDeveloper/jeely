<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\InputFile;
use Jeely\TL\Types\MaskPosition;

/**
 * @class CreateNewStickerSet
 * @description Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created. You must use exactly one of the fields png_sticker, tgs_sticker, or webm_sticker. Returns True on success.
 *
 * @property int $user_id User identifier of created sticker set owner
 * @property string $name Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g., animals). Can contain only English letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end in "_by_<bot_username>". <bot_username> is case insensitive. 1-64 characters.
 * @property string $title Sticker set title, 1-64 characters
 * @property InputFile|string $png_sticker PNG image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More information on Sending Files »
 * @property InputFile $tgs_sticker TGS animation with the sticker, uploaded using multipart/form-data. See https://core.telegram.org/stickers#animated-sticker-requirements for technical requirements
 * @property InputFile $webm_sticker WEBM video with the sticker, uploaded using multipart/form-data. See https://core.telegram.org/stickers#video-sticker-requirements for technical requirements
 * @property string $sticker_type Type of stickers in the set, pass “regular” or “mask”. Custom emoji sticker sets can't be created via the Bot API at the moment. By default, a regular sticker set is created.
 * @property string $emojis One or more emoji corresponding to the sticker
 * @property MaskPosition $mask_position A JSON-serialized object for position where the mask should be placed on faces
 *
 * @see https://api.telegram.org/bots/api#createnewstickerset
 */
class CreateNewStickerSet extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'bool';

    /**
     * @var int $user_id User identifier of created sticker set owner
     */
    public int $user_id;

    /**
     * @var string $name Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g., animals). Can contain only English letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end in "_by_<bot_username>". <bot_username> is case insensitive. 1-64 characters.
     */
    public string $name;

    /**
     * @var string $title Sticker set title, 1-64 characters
     */
    public string $title;

    /**
     * @var string $emojis One or more emoji corresponding to the sticker
     */
    public string $emojis;

    /**
     * @var mixed $mask_position A JSON-serialized object for position where the mask should be placed on faces
     */
    public mixed $mask_position = null;

    /**
     * @var string $sticker_type Type of stickers in the set, pass “regular” or “mask”. Custom emoji sticker sets can't be created via the Bot API at the moment. By default, a regular sticker set is created.
     */
    public string $sticker_type = '';

    /**
     * @var mixed $webm_sticker WEBM video with the sticker, uploaded using multipart/form-data. See https://core.telegram.org/stickers#video-sticker-requirements for technical requirements
     */
    public mixed $webm_sticker = null;

    /**
     * @var mixed $tgs_sticker TGS animation with the sticker, uploaded using multipart/form-data. See https://core.telegram.org/stickers#animated-sticker-requirements for technical requirements
     */
    public mixed $tgs_sticker = null;

    /**
     * @var string|null $png_sticker PNG image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. Pass a file_id as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. More information on Sending Files »
     */
    public string|null $png_sticker = null;

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return bool
     */
    public function __invoke()
    {
        return $this->call();
    }
}