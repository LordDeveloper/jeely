<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetCustomEmojiStickerSetThumbnail
* @description Use this method to set the thumbnail of a custom emoji sticker set. Returns True on success.
*
*
* @param	string $name Sticker set name
* @param	string $custom_emoji_id Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the thumbnail and use the first sticker as the thumbnail.
*
*
* @property	string $name Sticker set name
* @property	string $custom_emoji_id Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the thumbnail and use the first sticker as the thumbnail.
*
*/

#[Casts(['bool'])]
class SetCustomEmojiStickerSetThumbnail extends MethodDefinition implements MethodDefinitionInterface
{

}