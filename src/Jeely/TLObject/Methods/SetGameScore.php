<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\Message;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetGameScore
* @description Use this method to set the score of the specified user in a game message. On success, if the message is not an inline message, the Message is returned, otherwise True is returned. Returns an error, if the new score is not greater than the user's current score in the chat and force is False.
*
*
* @param	int $user_id User identifier
* @param	int $score New score, must be non-negative
* @param	bool $force Pass True if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
* @param	bool $disable_edit_message Pass True if the game message should not be automatically edited to include the current scoreboard
* @param	int $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat
* @param	int $message_id Required if inline_message_id is not specified. Identifier of the sent message
* @param	string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
*
*
* @property	int $user_id User identifier
* @property	int $score New score, must be non-negative
* @property	bool $force Pass True if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
* @property	bool $disable_edit_message Pass True if the game message should not be automatically edited to include the current scoreboard
* @property	int $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat
* @property	int $message_id Required if inline_message_id is not specified. Identifier of the sent message
* @property	string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Message', 'bool'])]
class SetGameScore extends MethodDefinition implements MethodDefinitionInterface
{

}