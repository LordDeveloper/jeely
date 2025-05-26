<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\MessageId;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class CopyMessages
* @description Use this method to copy messages of any kind. If some of the specified messages can't be found or copied, they are skipped. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz poll can be copied only if the value of the field correct_option_id is known to the bot. The method is analogous to the method forwardMessages, but the copied messages don't have a link to the original message. Album grouping is kept for copied messages. On success, an array of MessageId of the sent messages is returned.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
* @param	int|string $from_chat_id Unique identifier for the chat where the original messages were sent (or channel username in the format @channelusername)
* @param	int[] $message_ids A JSON-serialized list of 1-100 identifiers of messages in the chat from_chat_id to copy. The identifiers must be specified in a strictly increasing order.
* @param	bool $disable_notification Sends the messages silently. Users will receive a notification with no sound.
* @param	bool $protect_content Protects the contents of the sent messages from forwarding and saving
* @param	bool $remove_caption Pass True to copy the messages without their captions
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @property	int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
* @property	int|string $from_chat_id Unique identifier for the chat where the original messages were sent (or channel username in the format @channelusername)
* @property	int[] $message_ids A JSON-serialized list of 1-100 identifiers of messages in the chat from_chat_id to copy. The identifiers must be specified in a strictly increasing order.
* @property	bool $disable_notification Sends the messages silently. Users will receive a notification with no sound.
* @property	bool $protect_content Protects the contents of the sent messages from forwarding and saving
* @property	bool $remove_caption Pass True to copy the messages without their captions
*
*/

#[Casts(['Jeely\\TLObject\\Types\\MessageId[]'])]
class CopyMessages extends MethodDefinition implements MethodDefinitionInterface
{

}