<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class RemoveChatVerification
 * @description Removes verification from a chat that is currently verified on behalf of the organization represented by the bot. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target bot or channel in the format ＠username
 *
 * @see https://core.telegram.org/bots/api#removechatverification
 */
class RemoveChatVerification extends MethodDefinition implements MethodDefinitionInterface
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
