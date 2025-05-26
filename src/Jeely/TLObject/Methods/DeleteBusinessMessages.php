<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class DeleteBusinessMessages
* @description Delete messages on behalf of a business account. Requires the can_delete_sent_messages business bot right to delete messages sent by the bot itself, or the can_delete_all_messages business bot right to delete any message. Returns True on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection on behalf of which to delete the messages
* @param	int[] $message_ids A JSON-serialized list of 1-100 identifiers of messages to delete. All messages must be from the same chat. See deleteMessage for limitations on which messages can be deleted
*
*
* @property	string $business_connection_id Unique identifier of the business connection on behalf of which to delete the messages
* @property	int[] $message_ids A JSON-serialized list of 1-100 identifiers of messages to delete. All messages must be from the same chat. See deleteMessage for limitations on which messages can be deleted
*
*/

#[Casts(['bool'])]
class DeleteBusinessMessages extends MethodDefinition implements MethodDefinitionInterface
{

}