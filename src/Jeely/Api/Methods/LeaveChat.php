<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class LeaveChat
 * @description Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup or channel in the format ＠username. Channel direct messages chats aren't supported; leave the corresponding channel instead.
 *
 * @see https://core.telegram.org/bots/api#leavechat
 */
class LeaveChat extends MethodDefinition implements MethodDefinitionInterface
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
