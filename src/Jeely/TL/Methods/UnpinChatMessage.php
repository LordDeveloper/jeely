<?php

namespace Jeely\TL\Methods;


/**
 * @class UnpinChatMessage
 * @description Use this method to remove a message from the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
 * @property int $message_id Identifier of a message to unpin. If not specified, the most recent pinned message (by sending date) will be unpinned.
 *
 * @see https://api.telegram.org/bots/api#unpinchatmessage
 */
class UnpinChatMessage extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'bool';

    /**
     * @var int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * @var int $message_id Identifier of a message to unpin. If not specified, the most recent pinned message (by sending date) will be unpinned.
     */
    public int $message_id = 0;

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return bool
     */
    public function __invoke()
    {
        return $this->call();
    }
}