<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GetAvailableGifts
 * @description Returns the list of gifts that can be sent by the bot to users and channel chats. Requires no parameters. Returns a Gifts object.
 *
 *
 * @see https://core.telegram.org/bots/api#getavailablegifts
 */
class GetAvailableGifts extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'Gifts';

    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return Gifts
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}
