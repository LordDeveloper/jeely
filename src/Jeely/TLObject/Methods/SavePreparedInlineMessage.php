<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\InlineQueryResult;
use Jeely\TLObject\Types\PreparedInlineMessage;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SavePreparedInlineMessage
* @description Stores a message that can be sent by a user of a Mini App. Returns a PreparedInlineMessage object.
*
*
* @param	int $user_id Unique identifier of the target user that can use the prepared message
* @param	InlineQueryResult $result A JSON-serialized object describing the message to be sent
* @param	bool $allow_user_chats Pass True if the message can be sent to private chats with users
* @param	bool $allow_bot_chats Pass True if the message can be sent to private chats with bots
* @param	bool $allow_group_chats Pass True if the message can be sent to group and supergroup chats
* @param	bool $allow_channel_chats Pass True if the message can be sent to channel chats
*
*
* @property	int $user_id Unique identifier of the target user that can use the prepared message
* @property	InlineQueryResult $result A JSON-serialized object describing the message to be sent
* @property	bool $allow_user_chats Pass True if the message can be sent to private chats with users
* @property	bool $allow_bot_chats Pass True if the message can be sent to private chats with bots
* @property	bool $allow_group_chats Pass True if the message can be sent to group and supergroup chats
* @property	bool $allow_channel_chats Pass True if the message can be sent to channel chats
*
*/

#[Casts(['Jeely\\TLObject\\Types\\PreparedInlineMessage'])]
class SavePreparedInlineMessage extends MethodDefinition implements MethodDefinitionInterface
{

}