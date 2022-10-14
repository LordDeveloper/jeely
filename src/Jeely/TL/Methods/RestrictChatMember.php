<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\ChatPermissions;

/**
 * @class RestrictChatMember
 * @description Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights. Pass True for all permissions to lift restrictions from a user. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 * @property int $user_id Unique identifier of the target user
 * @property ChatPermissions $permissions A JSON-serialized object for new user permissions
 * @property int $until_date Date when restrictions will be lifted for the user, unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever
 * 
 * @see https://api.telegram.org/bots/api#restrictchatmember
 */
class RestrictChatMember  extends MethodDefinition implements MethodDefinitionInterface
{
	public string $castsTo = 'bool';

	/**
 	* @var int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 	*/
	public int|string $chat_id;

	/**
 	* @var int $user_id Unique identifier of the target user
 	*/
	public int $user_id;

	/**
 	* @var mixed $permissions A JSON-serialized object for new user permissions
 	*/
	public mixed $permissions;

	/**
 	* @var int $until_date Date when restrictions will be lifted for the user, unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever
 	*/
	public int $until_date = 0;

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