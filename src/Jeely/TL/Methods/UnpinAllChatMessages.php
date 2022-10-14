<?php

namespace Jeely\TL\Methods;


/**
 * @class UnpinAllChatMessages
 * @description Use this method to clear the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * 
 * @see https://api.telegram.org/bots/api#unpinallchatmessages
 */
class UnpinAllChatMessages  extends MethodDefinition implements MethodDefinitionInterface
{
	public string $castsTo = 'bool';

	/**
 	* @var int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 	*/
	public int|string $chat_id;

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