<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\ChatAdministratorRights;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetMyDefaultAdministratorRights
* @description Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels. These rights will be suggested to users, but they are free to modify the list before adding the bot. Returns True on success.
*
*
* @param	ChatAdministratorRights $rights A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
* @param	bool $for_channels Pass True to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
*
*
* @property	ChatAdministratorRights $rights A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
* @property	bool $for_channels Pass True to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
*
*/

#[Casts(['bool'])]
class SetMyDefaultAdministratorRights extends MethodDefinition implements MethodDefinitionInterface
{

}