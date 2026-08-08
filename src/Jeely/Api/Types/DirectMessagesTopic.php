<?php

namespace Jeely\Api\Types;

/**
 * @class DirectMessagesTopic
 * @description Describes a topic of a direct messages chat.
 *
 * @method int getTopicId() Unique identifier of the topic. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @method User getUser() Optional. Information about the user that created the topic. Currently, it is always present.
 *
 * @method bool isTopicId()
 * @method bool isUser()
 *
 * @method $this setTopicId()
 * @method $this setUser()
 *
 * @method $this unsetTopicId()
 * @method $this unsetUser()
 *
 * @property int $topic_id Unique identifier of the topic. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property User $user Optional. Information about the user that created the topic. Currently, it is always present.
 *
 * @see https://core.telegram.org/bots/api#directmessagestopic
 */
class DirectMessagesTopic extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'topic_id' => 'int',
        'user' => 'User',
    ];
}
