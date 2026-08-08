<?php

namespace Jeely\Api\Types;

/**
 * @class CommunityChatAdded
 * @description Describes a service message about a chat being added to a community.
 *
 * @method Community getCommunity() The new community to which the chat belongs
 *
 * @method bool isCommunity()
 *
 * @method $this setCommunity()
 *
 * @method $this unsetCommunity()
 *
 * @property Community $community The new community to which the chat belongs
 *
 * @see https://core.telegram.org/bots/api#communitychatadded
 */
class CommunityChatAdded extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'community' => 'Community',
    ];
}
