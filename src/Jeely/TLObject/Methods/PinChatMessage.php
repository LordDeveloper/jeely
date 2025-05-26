<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class PinChatMessage
* @description Use this method to add a message to the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns True on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection on behalf of which the message will be pinned
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	int $message_id Identifier of a message to pin
* @param	bool $disable_notification Pass True if it is not necessary to send a notification to all chat members about the new pinned message. Notifications are always disabled in channels and private chats.
*
*
* @property	string $business_connection_id Unique identifier of the business connection on behalf of which the message will be pinned
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @property	int $message_id Identifier of a message to pin
* @property	bool $disable_notification Pass True if it is not necessary to send a notification to all chat members about the new pinned message. Notifications are always disabled in channels and private chats.
*
*/

#[Casts(['bool'])]
class PinChatMessage extends MethodDefinition implements MethodDefinitionInterface
{

}