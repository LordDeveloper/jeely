<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\InlineKeyboardMarkup;
use Jeely\TL\Types\Poll;

/**
 * @class StopPoll
 * @description Use this method to stop a poll which was sent by the bot. On success, the stopped Poll is returned.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property int $message_id Identifier of the original message with the poll
 * @property InlineKeyboardMarkup $reply_markup A JSON-serialized object for a new message inline keyboard.
 * 
 * @see https://api.telegram.org/bots/api#stoppoll
 */
class StopPoll  extends MethodDefinition implements MethodDefinitionInterface
{
	public string $castsTo = 'Poll';

	/**
 	* @var int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 	*/
	public int|string $chat_id;

	/**
 	* @var int $message_id Identifier of the original message with the poll
 	*/
	public int $message_id;

	/**
 	* @var mixed $reply_markup A JSON-serialized object for a new message inline keyboard.
 	*/
	public mixed $reply_markup = null;

	/**
	 * @var array $vars The value that are taken in the constructor method as method parameters.
	 */
	public function __construct(public array $vars = [])
	{}

	/**
	 * @return Poll
	 */
	public function __invoke()
	{
		return $this->call();
	}
}