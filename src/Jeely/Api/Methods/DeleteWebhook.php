<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class DeleteWebhook
 * @description Use this method to remove webhook integration if you decide to switch back to getUpdates. Returns True on success.
 *
 * @property bool $drop_pending_updates Pass True to drop all pending updates
 *
 * @see https://core.telegram.org/bots/api#deletewebhook
 */
class DeleteWebhook extends MethodDefinition implements MethodDefinitionInterface
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
