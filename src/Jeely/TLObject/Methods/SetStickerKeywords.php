<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetStickerKeywords
* @description Use this method to change search keywords assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns True on success.
*
*
* @param	string $sticker File identifier of the sticker
* @param	string[] $keywords A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64 characters
*
*
* @property	string $sticker File identifier of the sticker
* @property	string[] $keywords A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64 characters
*
*/

#[Casts(['bool'])]
class SetStickerKeywords extends MethodDefinition implements MethodDefinitionInterface
{

}