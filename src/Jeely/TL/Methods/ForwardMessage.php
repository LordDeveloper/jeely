<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\Message;

/**
 * @class ForwardMessage
 * @description Use this method to forward messages of any kind. Service messages can't be forwarded. On success, the sent Message is returned.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property int|string $from_chat_id Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername)
 * @property bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the forwarded message from forwarding and saving
 * @property int $message_id Message identifier in the chat specified in from_chat_id
 * 
 * @see https://api.telegram.org/bots/api#forwardmessage
 */
class ForwardMessage  extends MethodDefinition implements MethodDefinitionInterface
{
	public string $castsTo = 'Message';

	/**
 	* @var int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 	*/
	public int|string $chat_id;

	/**
 	* @var int|string $from_chat_id Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername)
 	*/
	public int|string $from_chat_id;

	/**
 	* @var int $message_id Message identifier in the chat specified in from_chat_id
 	*/
	public int $message_id;

	/**
 	* @var ?bool $protect_content Protects the contents of the forwarded message from forwarding and saving
 	*/
	public ?bool $protect_content = null;

	/**
 	* @var ?bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 	*/
	public ?bool $disable_notification = null;

	/**
	 * @var array $vars The value that are taken in the constructor method as method parameters.
	 */
	public function __construct(public array $vars = [])
	{}

	/**
	 * @return Message
	 */
	public function __invoke()
	{
		return $this->call();
	}
}