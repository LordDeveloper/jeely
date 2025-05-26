<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\ChatAdministratorRights;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetMyDefaultAdministratorRights
* @description Use this method to get the current default administrator rights of the bot. Returns ChatAdministratorRights on success.
*
*
* @param	bool $for_channels Pass True to get default administrator rights of the bot in channels. Otherwise, default administrator rights of the bot for groups and supergroups will be returned.
*
*
* @property	bool $for_channels Pass True to get default administrator rights of the bot in channels. Otherwise, default administrator rights of the bot for groups and supergroups will be returned.
*
*/

#[Casts(['Jeely\\TLObject\\Types\\ChatAdministratorRights'])]
class GetMyDefaultAdministratorRights extends MethodDefinition implements MethodDefinitionInterface
{

}