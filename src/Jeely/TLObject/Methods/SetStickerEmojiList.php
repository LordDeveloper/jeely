<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetStickerEmojiList
* @description Use this method to change the list of emoji assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns True on success.
*
*
* @param	string $sticker File identifier of the sticker
* @param	string[] $emoji_list A JSON-serialized list of 1-20 emoji associated with the sticker
*
*
* @property	string $sticker File identifier of the sticker
* @property	string[] $emoji_list A JSON-serialized list of 1-20 emoji associated with the sticker
*
*/

#[Casts(['bool'])]
class SetStickerEmojiList extends MethodDefinition implements MethodDefinitionInterface
{

}