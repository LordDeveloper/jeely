<?php

namespace Jeely\Api\Types;

/**
 * @class DirectMessagePriceChanged
 * @description Describes a service message about a change in the price of direct messages sent to a channel chat.
 *
 * @method bool getAreDirectMessagesEnabled() True, if direct messages are enabled for the channel chat; False otherwise
 * @method int getDirectMessageStarCount() Optional. The new number of Telegram Stars that must be paid by users for each direct message sent to the channel. Does not apply to users who have been exempted by administrators. Defaults to 0.
 *
 * @method bool isAreDirectMessagesEnabled()
 * @method bool isDirectMessageStarCount()
 *
 * @method $this setAreDirectMessagesEnabled()
 * @method $this setDirectMessageStarCount()
 *
 * @method $this unsetAreDirectMessagesEnabled()
 * @method $this unsetDirectMessageStarCount()
 *
 * @property bool $are_direct_messages_enabled True, if direct messages are enabled for the channel chat; False otherwise
 * @property int $direct_message_star_count Optional. The new number of Telegram Stars that must be paid by users for each direct message sent to the channel. Does not apply to users who have been exempted by administrators. Defaults to 0.
 *
 * @see https://core.telegram.org/bots/api#directmessagepricechanged
 */
class DirectMessagePriceChanged extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'are_direct_messages_enabled' => 'bool',
        'direct_message_star_count' => 'int',
    ];
}
