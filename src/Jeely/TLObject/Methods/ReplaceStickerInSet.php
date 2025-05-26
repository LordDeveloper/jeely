<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\InputSticker;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class ReplaceStickerInSet
* @description Use this method to replace an existing sticker in a sticker set with a new one. The method is equivalent to calling deleteStickerFromSet, then addStickerToSet, then setStickerPositionInSet. Returns True on success.
*
*
* @param	int $user_id User identifier of the sticker set owner
* @param	string $name Sticker set name
* @param	string $old_sticker File identifier of the replaced sticker
* @param	InputSticker $sticker A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set remains unchanged.
*
*
* @property	int $user_id User identifier of the sticker set owner
* @property	string $name Sticker set name
* @property	string $old_sticker File identifier of the replaced sticker
* @property	InputSticker $sticker A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set remains unchanged.
*
*/

#[Casts(['bool'])]
class ReplaceStickerInSet extends MethodDefinition implements MethodDefinitionInterface
{

}