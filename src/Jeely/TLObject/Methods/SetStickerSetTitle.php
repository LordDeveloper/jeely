<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetStickerSetTitle
* @description Use this method to set the title of a created sticker set. Returns True on success.
*
*
* @param	string $name Sticker set name
* @param	string $title Sticker set title, 1-64 characters
*
*
* @property	string $name Sticker set name
* @property	string $title Sticker set title, 1-64 characters
*
*/

#[Casts(['bool'])]
class SetStickerSetTitle extends MethodDefinition implements MethodDefinitionInterface
{

}