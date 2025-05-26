<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetChatAdministratorCustomTitle
* @description Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns True on success.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
* @param	int $user_id Unique identifier of the target user
* @param	string $custom_title New custom title for the administrator; 0-16 characters, emoji are not allowed
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
* @property	int $user_id Unique identifier of the target user
* @property	string $custom_title New custom title for the administrator; 0-16 characters, emoji are not allowed
*
*/

#[Casts(['bool'])]
class SetChatAdministratorCustomTitle extends MethodDefinition implements MethodDefinitionInterface
{

}