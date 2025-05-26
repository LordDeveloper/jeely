<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\MaskPosition;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetStickerMaskPosition
* @description Use this method to change the mask position of a mask sticker. The sticker must belong to a sticker set that was created by the bot. Returns True on success.
*
*
* @param	string $sticker File identifier of the sticker
* @param	MaskPosition $mask_position A JSON-serialized object with the position where the mask should be placed on faces. Omit the parameter to remove the mask position.
*
*
* @property	string $sticker File identifier of the sticker
* @property	MaskPosition $mask_position A JSON-serialized object with the position where the mask should be placed on faces. Omit the parameter to remove the mask position.
*
*/

#[Casts(['bool'])]
class SetStickerMaskPosition extends MethodDefinition implements MethodDefinitionInterface
{

}