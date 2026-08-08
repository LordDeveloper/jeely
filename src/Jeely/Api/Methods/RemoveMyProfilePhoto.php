<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class RemoveMyProfilePhoto
 * @description Removes the profile photo of the bot. Requires no parameters. Returns True on success.
 *
 *
 * @see https://core.telegram.org/bots/api#removemyprofilephoto
 */
class RemoveMyProfilePhoto extends MethodDefinition implements MethodDefinitionInterface
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
