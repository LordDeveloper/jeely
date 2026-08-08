<?php

namespace Jeely\Api\Types;

/**
 * @class ChatBoostRemoved
 * @description This object represents a boost removed from a chat.
 *
 * @method Chat getChat() Chat which was boosted
 * @method string getBoostId() Unique identifier of the boost
 * @method int getRemoveDate() Point in time (Unix timestamp) when the boost was removed
 * @method ChatBoostSource getSource() Source of the removed boost
 *
 * @method bool isChat()
 * @method bool isBoostId()
 * @method bool isRemoveDate()
 * @method bool isSource()
 *
 * @method $this setChat()
 * @method $this setBoostId()
 * @method $this setRemoveDate()
 * @method $this setSource()
 *
 * @method $this unsetChat()
 * @method $this unsetBoostId()
 * @method $this unsetRemoveDate()
 * @method $this unsetSource()
 *
 * @property Chat $chat Chat which was boosted
 * @property string $boost_id Unique identifier of the boost
 * @property int $remove_date Point in time (Unix timestamp) when the boost was removed
 * @property ChatBoostSource $source Source of the removed boost
 *
 * @see https://core.telegram.org/bots/api#chatboostremoved
 */
class ChatBoostRemoved extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'chat' => 'Chat',
        'boost_id' => 'string',
        'remove_date' => 'int',
        'source' => 'ChatBoostSource',
    ];
}
