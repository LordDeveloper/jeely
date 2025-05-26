<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\InlineKeyboardMarkup;
use Jeely\TLObject\Types\Poll;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class StopPoll
* @description Use this method to stop a poll which was sent by the bot. On success, the stopped Poll is returned.
*
*
* @param	string $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	int $message_id Identifier of the original message with the poll
* @param	InlineKeyboardMarkup $reply_markup A JSON-serialized object for a new message inline keyboard.
*
*
* @property	string $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @property	int $message_id Identifier of the original message with the poll
* @property	InlineKeyboardMarkup $reply_markup A JSON-serialized object for a new message inline keyboard.
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Poll'])]
class StopPoll extends MethodDefinition implements MethodDefinitionInterface
{

}