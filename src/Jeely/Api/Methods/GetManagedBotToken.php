<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetManagedBotToken
 * @description Use this method to get the token of a managed bot. Returns the token as String on success.
 *
 * @property int $user_id User identifier of the managed bot whose token will be returned
 *
 * @see https://core.telegram.org/bots/api#getmanagedbottoken
 */
class GetManagedBotToken extends MethodDefinition implements MethodDefinitionInterface
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
