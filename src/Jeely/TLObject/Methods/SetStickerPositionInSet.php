<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetStickerPositionInSet
* @description Use this method to move a sticker in a set created by the bot to a specific position. Returns True on success.
*
*
* @param	string $sticker File identifier of the sticker
* @param	int $position New sticker position in the set, zero-based
*
*
* @property	string $sticker File identifier of the sticker
* @property	int $position New sticker position in the set, zero-based
*
*/

#[Casts(['bool'])]
class SetStickerPositionInSet extends MethodDefinition implements MethodDefinitionInterface
{

}