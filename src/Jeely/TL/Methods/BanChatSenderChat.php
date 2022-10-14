<?php

namespace Jeely\TL\Methods;


/**
 * @class BanChatSenderChat
 * @description Use this method to ban a channel chat in a supergroup or a channel. Until the chat is unbanned, the owner of the banned chat won't be able to send messages on behalf of any of their channels. The bot must be an administrator in the supergroup or channel for this to work and must have the appropriate administrator rights. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property int $sender_chat_id Unique identifier of the target sender chat
 * 
 * @see https://api.telegram.org/bots/api#banchatsenderchat
 */
class BanChatSenderChat  extends MethodDefinition implements MethodDefinitionInterface
{
	public string $castsTo = 'bool';

	/**
 	* @var int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 	*/
	public int|string $chat_id;

	/**
 	* @var int $sender_chat_id Unique identifier of the target sender chat
 	*/
	public int $sender_chat_id;

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