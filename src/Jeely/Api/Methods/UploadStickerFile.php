<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class UploadStickerFile
 * @description Use this method to upload a file with a sticker for later use in the createNewStickerSet, addStickerToSet, or replaceStickerInSet methods (the file can be used multiple times). Returns the uploaded File on success.
 *
 * @property int $user_id User identifier of sticker file owner
 * @property InputFile $sticker A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See https://core.telegram.org/stickers for technical requirements. More information on Sending Files »
 * @property string $sticker_format Format of the sticker, must be one of “static”, “animated”, “video”
 *
 * @see https://core.telegram.org/bots/api#uploadstickerfile
 */
class UploadStickerFile extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'File';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return File
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
