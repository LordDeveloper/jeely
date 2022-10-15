<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\User;

/**
 * @class GetMe
 * @description A simple method for testing your bot's authentication token. Requires no parameters. Returns basic information about the bot in form of a User object.
 *
 *
 * @see https://api.telegram.org/bots/api#getme
 */
class GetMe extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'User';

    /**
     * @var array $params The value that are taken in the constructor method as method parameters.
     */
    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return User
     */
    public function __invoke()
    {
        return $this->call();
    }
}