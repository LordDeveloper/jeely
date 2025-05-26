<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\StickerSet;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetStickerSet
* @description Use this method to get a sticker set. On success, a StickerSet object is returned.
*
*
* @param	string $name Name of the sticker set
*
*
* @property	string $name Name of the sticker set
*
*/

#[Casts(['Jeely\\TLObject\\Types\\StickerSet'])]
class GetStickerSet extends MethodDefinition implements MethodDefinitionInterface
{

}