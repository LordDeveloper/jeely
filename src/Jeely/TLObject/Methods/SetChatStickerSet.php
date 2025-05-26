<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetChatStickerSet
* @description Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
* @param	string $sticker_set_name Name of the sticker set to be set as the group sticker set
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
* @property	string $sticker_set_name Name of the sticker set to be set as the group sticker set
*
*/

#[Casts(['bool'])]
class SetChatStickerSet extends MethodDefinition implements MethodDefinitionInterface
{

}