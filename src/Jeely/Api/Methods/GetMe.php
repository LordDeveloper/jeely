<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetMe
 * @description A simple method for testing your bot's authentication token. Requires no parameters. Returns basic information about the bot in form of a User object.
 *
 *
 * @see https://core.telegram.org/bots/api#getme
 */
class GetMe extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'User';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return User
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
