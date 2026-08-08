<?php

namespace Jeely\Api\Methods;

use Jeely\Telegram;

/**
 * @class GiftPremiumSubscription
 * @description Gifts a Telegram Premium subscription to the given user. Returns True on success.
 *
 * @property int $user_id Unique identifier of the target user who will receive a Telegram Premium subscription
 * @property int $month_count Number of months the Telegram Premium subscription will be active for the user; must be one of 3, 6, or 12
 * @property int $star_count Number of Telegram Stars to pay for the Telegram Premium subscription; must be 1000 for 3 months, 1500 for 6 months, and 2500 for 12 months
 * @property string $text Text that will be shown along with the service message about the subscription; 0-128 characters
 * @property string $text_parse_mode Mode for parsing entities in the text. See formatting options for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are ignored.
 * @property MessageEntity[] $text_entities A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of text_parse_mode. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, “custom_emoji”, and “date_time” are ignored.
 *
 * @see https://core.telegram.org/bots/api#giftpremiumsubscription
 */
class GiftPremiumSubscription extends MethodDefinition implements MethodDefinitionInterface
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
