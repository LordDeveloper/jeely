<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\Message;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class ForwardMessage
* @description Use this method to forward messages of any kind. Service messages and messages with protected content can't be forwarded. On success, the sent Message is returned.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @param	int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
* @param	int|string $from_chat_id Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername)
* @param	int $video_start_timestamp New start timestamp for the forwarded video in the message
* @param	bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
* @param	bool $protect_content Protects the contents of the forwarded message from forwarding and saving
* @param	int $message_id Message identifier in the chat specified in from_chat_id
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
* @property	int $message_thread_id Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
* @property	int|string $from_chat_id Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername)
* @property	int $video_start_timestamp New start timestamp for the forwarded video in the message
* @property	bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
* @property	bool $protect_content Protects the contents of the forwarded message from forwarding and saving
* @property	int $message_id Message identifier in the chat specified in from_chat_id
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Message'])]
class ForwardMessage extends MethodDefinition implements MethodDefinitionInterface
{

}