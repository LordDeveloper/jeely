<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class DeleteStickerFromSet
* @description Use this method to delete a sticker from a set created by the bot. Returns True on success.
*
*
* @param	string $sticker File identifier of the sticker
*
*
* @property	string $sticker File identifier of the sticker
*
*/

#[Casts(['bool'])]
class DeleteStickerFromSet extends MethodDefinition implements MethodDefinitionInterface
{

}