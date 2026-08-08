<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class SetMyProfilePhoto
 * @description Changes the profile photo of the bot. Returns True on success.
 *
 * @property InputPrilePhoto $photo The new profile photo to set
 *
 * @see https://core.telegram.org/bots/api#setmyprofilephoto
 */
class SetMyProfilePhoto extends MethodDefinition implements MethodDefinitionInterface
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
