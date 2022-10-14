<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\ChatInviteLink;

/**
 * @class CreateChatInviteLink
 * @description Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. The link can be revoked using the method revokeChatInviteLink. Returns the new invite link as ChatInviteLink object.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property string $name Invite link name; 0-32 characters
 * @property int $expire_date Point in time (Unix timestamp) when the link will expire
 * @property int $member_limit The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
 * @property bool $creates_join_request True, if users joining the chat via the link need to be approved by chat administrators. If True, member_limit can't be specified
 * 
 * @see https://api.telegram.org/bots/api#createchatinvitelink
 */
class CreateChatInviteLink  extends MethodDefinition implements MethodDefinitionInterface
{
	public string $castsTo = 'ChatInviteLink';

	/**
 	* @var int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 	*/
	public int|string $chat_id;

	/**
 	* @var ?bool $creates_join_request True, if users joining the chat via the link need to be approved by chat administrators. If True, member_limit can't be specified
 	*/
	public ?bool $creates_join_request = null;

	/**
 	* @var int $member_limit The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
 	*/
	public int $member_limit = 0;

	/**
 	* @var int $expire_date Point in time (Unix timestamp) when the link will expire
 	*/
	public int $expire_date = 0;

	/**
 	* @var string $name Invite link name; 0-32 characters
 	*/
	public string $name = '';

	/**
	 * @var array $vars The value that are taken in the constructor method as method parameters.
	 */
	public function __construct(public array $vars = [])
	{}

	/**
	 * @return ChatInviteLink
	 */
	public function __invoke()
	{
		return $this->call();
	}
}