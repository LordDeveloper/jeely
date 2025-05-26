<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\GameHighScore;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetGameHighScores
* @description Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. Returns an Array of GameHighScore objects.
*
*
* @param	int $user_id Target user id
* @param	int $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat
* @param	int $message_id Required if inline_message_id is not specified. Identifier of the sent message
* @param	string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
*
*
* @property	int $user_id Target user id
* @property	int $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat
* @property	int $message_id Required if inline_message_id is not specified. Identifier of the sent message
* @property	string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
*
*/

#[Casts(['Jeely\\TLObject\\Types\\GameHighScore[]'])]
class GetGameHighScores extends MethodDefinition implements MethodDefinitionInterface
{

}