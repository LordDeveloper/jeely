<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\InputFile;
use Jeely\TLObject\Types\File;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class UploadStickerFile
* @description Use this method to upload a file with a sticker for later use in the createNewStickerSet, addStickerToSet, or replaceStickerInSet methods (the file can be used multiple times). Returns the uploaded File on success.
*
*
* @param	int $user_id User identifier of sticker file owner
* @param	InputFile $sticker A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See https://core.telegram.org/stickers for technical requirements. More information on Sending Files »
* @param	string $sticker_format Format of the sticker, must be one of “static”, “animated”, “video”
*
*
* @property	int $user_id User identifier of sticker file owner
* @property	InputFile $sticker A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See https://core.telegram.org/stickers for technical requirements. More information on Sending Files »
* @property	string $sticker_format Format of the sticker, must be one of “static”, “animated”, “video”
*
*/

#[Casts(['Jeely\\TLObject\\Types\\File'])]
class UploadStickerFile extends MethodDefinition implements MethodDefinitionInterface
{

}