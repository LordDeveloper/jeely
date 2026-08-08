<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetWebhookInfo
 * @description Use this method to get current webhook status. Requires no parameters. On success, returns a WebhookInfo object. If the bot is using getUpdates, will return an object with the url field empty.
 *
 *
 * @see https://core.telegram.org/bots/api#getwebhookinfo
 */
class GetWebhookInfo extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'WebhookInfo';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return WebhookInfo
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
