<?php

namespace Jeely\TL\Methods;


use Jeely\Telegram;
use Jeely\TL\Types\ShippingOption;

/**
 * @class AnswerShippingQuery
 * @description If you sent an invoice requesting a shipping address and the parameter is_flexible was specified, the Bot API will send an Update with a shipping_query field to the bot. Use this method to reply to shipping queries. On success, True is returned.
 *
 * @property string $shipping_query_id Unique identifier for the query to be answered
 * @property bool $ok Pass True if delivery to the specified address is possible and False if there are any problems (for example, if delivery to the specified address is not possible)
 * @property ShippingOption[] $shipping_options Required if ok is True. A JSON-serialized array of available shipping options.
 * @property string $error_message Required if ok is False. Error message in human readable form that explains why it is impossible to complete the order (e.g. "Sorry, delivery to your desired address is unavailable'). Telegram will display this message to the user.
 *
 *
 * @see https://api.telegram.org/bots/api#answershippingquery
 */
class AnswerShippingQuery extends MethodDefinition implements MethodDefinitionInterface
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