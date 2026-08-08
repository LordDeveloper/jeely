<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class ConvertGiftToStars
 * @description Converts a given regular gift to Telegram Stars. Requires the can_convert_gifts_to_stars business bot right. Returns True on success.
 *
 * @property string $business_connection_id Unique identifier of the business connection
 * @property string $owned_gift_id Unique identifier of the regular gift that should be converted to Telegram Stars
 *
 * @see https://core.telegram.org/bots/api#convertgifttostars
 */
class ConvertGiftToStars extends MethodDefinition implements MethodDefinitionInterface
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
