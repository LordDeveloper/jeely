<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\Sticker;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetCustomEmojiStickers
* @description Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of Sticker objects.
*
*
* @param	string[] $custom_emoji_ids A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
*
*
* @property	string[] $custom_emoji_ids A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Sticker[]'])]
class GetCustomEmojiStickers extends MethodDefinition implements MethodDefinitionInterface
{

}