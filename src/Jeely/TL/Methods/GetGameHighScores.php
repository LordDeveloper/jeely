<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\GameHighScore;

/**
 * @class GetGameHighScores
 * @description Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. Returns an Array of GameHighScore objects.
 *
 * @property int $user_id Target user id
 * @property int $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat
 * @property int $message_id Required if inline_message_id is not specified. Identifier of the sent message
 * @property string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
 * 
 * @see https://api.telegram.org/bots/api#getgamehighscores
 */
class GetGameHighScores  extends MethodDefinition implements MethodDefinitionInterface
{
	public string $castsTo = 'GameHighScore[]';

	/**
 	* @var int $user_id Target user id
 	*/
	public int $user_id;

	/**
 	* @var string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
 	*/
	public string $inline_message_id = '';

	/**
 	* @var int $message_id Required if inline_message_id is not specified. Identifier of the sent message
 	*/
	public int $message_id = 0;

	/**
 	* @var int $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat
 	*/
	public int $chat_id = 0;

	/**
	 * @var array $vars The value that are taken in the constructor method as method parameters.
	 */
	public function __construct(public array $vars = [])
	{}

	/**
	 * @return GameHighScore[]
	 */
	public function __invoke()
	{
		return $this->call();
	}
}