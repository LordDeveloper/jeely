<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\File;
use Jeely\TL\Types\InputFile;

/**
 * @class UploadStickerFile
 * @description Use this method to upload a .PNG file with a sticker for later use in createNewStickerSet and addStickerToSet methods (can be used multiple times). Returns the uploaded File on success.
 *
 * @property int $user_id User identifier of sticker file owner
 * @property InputFile $png_sticker PNG image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. More information on Sending Files »
 *
 * @see https://api.telegram.org/bots/api#uploadstickerfile
 */
class UploadStickerFile extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'File';

    /**
     * @var array $params The value that are taken in the constructor method as method parameters.
     */
    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return File
     */
    public function __invoke()
    {
        return $this->call();
    }
}