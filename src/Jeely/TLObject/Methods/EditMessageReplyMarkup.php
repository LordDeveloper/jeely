<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\InlineKeyboardMarkup;
use Jeely\TLObject\Types\Message;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class EditMessageReplyMarkup
* @description Use this method to edit only the reply markup of messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
*
*
* @param	string $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
* @param	int|string $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	int $message_id Required if inline_message_id is not specified. Identifier of the message to edit
* @param	string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
* @param	InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard.
*
*
* @property	string $business_connection_id Unique identifier of the business connection on behalf of which the message to be edited was sent
* @property	int|string $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @property	int $message_id Required if inline_message_id is not specified. Identifier of the message to edit
* @property	string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
* @property	InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard.
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Message', 'bool'])]
class EditMessageReplyMarkup extends MethodDefinition implements MethodDefinitionInterface
{

}