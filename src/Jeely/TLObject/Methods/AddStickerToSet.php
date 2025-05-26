<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\InputSticker;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class AddStickerToSet
* @description Use this method to add a new sticker to a set created by the bot. Emoji sticker sets can have up to 200 stickers. Other sticker sets can have up to 120 stickers. Returns True on success.
*
*
* @param	int $user_id User identifier of sticker set owner
* @param	string $name Sticker set name
* @param	InputSticker $sticker A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set isn't changed.
*
*
* @property	int $user_id User identifier of sticker set owner
* @property	string $name Sticker set name
* @property	InputSticker $sticker A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set isn't changed.
*
*/

#[Casts(['bool'])]
class AddStickerToSet extends MethodDefinition implements MethodDefinitionInterface
{

}