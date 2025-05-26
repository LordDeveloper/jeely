<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\MessageEntity;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GiftPremiumSubscription
* @description Gifts a Telegram Premium subscription to the given user. Returns True on success.
*
*
* @param	int $user_id Unique identifier of the target user who will receive a Telegram Premium subscription
* @param	int $month_count Number of months the Telegram Premium subscription will be active for the user; must be one of 3, 6, or 12
* @param	int $star_count Number of Telegram Stars to pay for the Telegram Premium subscription; must be 1000 for 3 months, 1500 for 6 months, and 2500 for 12 months
* @param	string $text Text that will be shown along with the service message about the subscription; 0-128 characters
* @param	string $text_parse_mode Mode for parsing entities in the text. See formatting options for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom_emoji” are ignored.
* @param	MessageEntity[] $text_entities A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of text_parse_mode. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom_emoji” are ignored.
*
*
* @property	int $user_id Unique identifier of the target user who will receive a Telegram Premium subscription
* @property	int $month_count Number of months the Telegram Premium subscription will be active for the user; must be one of 3, 6, or 12
* @property	int $star_count Number of Telegram Stars to pay for the Telegram Premium subscription; must be 1000 for 3 months, 1500 for 6 months, and 2500 for 12 months
* @property	string $text Text that will be shown along with the service message about the subscription; 0-128 characters
* @property	string $text_parse_mode Mode for parsing entities in the text. See formatting options for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom_emoji” are ignored.
* @property	MessageEntity[] $text_entities A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of text_parse_mode. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom_emoji” are ignored.
*
*/

#[Casts(['bool'])]
class GiftPremiumSubscription extends MethodDefinition implements MethodDefinitionInterface
{

}