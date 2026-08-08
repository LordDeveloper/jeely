<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetChatPhoto
 * @description Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target channel in the format ＠username
 * @property InputFile $photo New chat photo, uploaded using multipart/form-data
 *
 * @see https://core.telegram.org/bots/api#setchatphoto
 */
class SetChatPhoto extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'bool';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return bool
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
