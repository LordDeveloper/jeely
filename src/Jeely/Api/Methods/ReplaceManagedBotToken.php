<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class ReplaceManagedBotToken
 * @description Use this method to revoke the current token of a managed bot and generate a new one. Returns the new token as String on success.
 *
 * @property int $user_id User identifier of the managed bot whose token will be replaced
 *
 * @see https://core.telegram.org/bots/api#replacemanagedbottoken
 */
class ReplaceManagedBotToken extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'string';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return string
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
