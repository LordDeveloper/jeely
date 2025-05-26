<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\InputFile;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetChatPhoto
* @description Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	InputFile $photo New chat photo, uploaded using multipart/form-data
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @property	InputFile $photo New chat photo, uploaded using multipart/form-data
*
*/

#[Casts(['bool'])]
class SetChatPhoto extends MethodDefinition implements MethodDefinitionInterface
{

}