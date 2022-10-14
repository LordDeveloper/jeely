<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\ChatPermissions;

/**
 * @class SetChatPermissions
 * @description Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the can_restrict_members administrator rights. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 * @property ChatPermissions $permissions A JSON-serialized object for new default chat permissions
 * 
 * @see https://api.telegram.org/bots/api#setchatpermissions
 */
class SetChatPermissions  extends MethodDefinition implements MethodDefinitionInterface
{
	public string $castsTo = 'bool';

	/**
 	* @var int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 	*/
	public int|string $chat_id;

	/**
 	* @var mixed $permissions A JSON-serialized object for new default chat permissions
 	*/
	public mixed $permissions;

	/**
	 * @var array $vars The value that are taken in the constructor method as method parameters.
	 */
	public function __construct(public array $vars = [])
	{}

	/**
	 * @return bool
	 */
	public function __invoke()
	{
		return $this->call();
	}
}