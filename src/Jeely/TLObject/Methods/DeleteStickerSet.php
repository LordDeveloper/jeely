<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class DeleteStickerSet
* @description Use this method to delete a sticker set that was created by the bot. Returns True on success.
*
*
* @param	string $name Sticker set name
*
*
* @property	string $name Sticker set name
*
*/

#[Casts(['bool'])]
class DeleteStickerSet extends MethodDefinition implements MethodDefinitionInterface
{

}