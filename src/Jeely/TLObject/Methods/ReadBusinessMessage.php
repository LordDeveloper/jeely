<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class ReadBusinessMessage
* @description Marks incoming message as read on behalf of a business account. Requires the can_read_messages business bot right. Returns True on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection on behalf of which to read the message
* @param	int $chat_id Unique identifier of the chat in which the message was received. The chat must have been active in the last 24 hours.
* @param	int $message_id Unique identifier of the message to mark as read
*
*
* @property	string $business_connection_id Unique identifier of the business connection on behalf of which to read the message
* @property	int $chat_id Unique identifier of the chat in which the message was received. The chat must have been active in the last 24 hours.
* @property	int $message_id Unique identifier of the message to mark as read
*
*/

#[Casts(['bool'])]
class ReadBusinessMessage extends MethodDefinition implements MethodDefinitionInterface
{

}