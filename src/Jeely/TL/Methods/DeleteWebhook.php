<?php

namespace Jeely\TL\Methods;


use Jeely\Telegram;

/**
 * @class DeleteWebhook
 * @description Use this method to remove webhook integration if you decide to switch back to getUpdates. Returns True on success.
 *
 * @property bool $drop_pending_updates Pass True to drop all pending updates
 *
 *
 * @see https://api.telegram.org/bots/api#deletewebhook
 */
class DeleteWebhook extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'bool';

    /**
     * @var mixed $params The value that are taken in the constructor method as method parameters.
     */
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