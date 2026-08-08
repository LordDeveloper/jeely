<?php

namespace Jeely\Api\Types;

/**
 * @class ChatBoost
 * @description This object contains information about a chat boost.
 *
 * @method string getBoostId() Unique identifier of the boost
 * @method int getAddDate() Point in time (Unix timestamp) when the chat was boosted
 * @method int getExpirationDate() Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged
 * @method ChatBoostSource getSource() Source of the added boost
 *
 * @method bool isBoostId()
 * @method bool isAddDate()
 * @method bool isExpirationDate()
 * @method bool isSource()
 *
 * @method $this setBoostId()
 * @method $this setAddDate()
 * @method $this setExpirationDate()
 * @method $this setSource()
 *
 * @method $this unsetBoostId()
 * @method $this unsetAddDate()
 * @method $this unsetExpirationDate()
 * @method $this unsetSource()
 *
 * @property string $boost_id Unique identifier of the boost
 * @property int $add_date Point in time (Unix timestamp) when the chat was boosted
 * @property int $expiration_date Point in time (Unix timestamp) when the boost will automatically expire, unless the booster's Telegram Premium subscription is prolonged
 * @property ChatBoostSource $source Source of the added boost
 *
 * @see https://core.telegram.org/bots/api#chatboost
 */
class ChatBoost extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'boost_id' => 'string',
        'add_date' => 'int',
        'expiration_date' => 'int',
        'source' => 'ChatBoostSource',
    ];
}
