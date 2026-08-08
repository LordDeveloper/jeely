<?php

namespace Jeely\Api\Types;

/**
 * @class UserChatBoosts
 * @description This object represents a list of boosts added to a chat by a user.
 *
 * @method ChatBoost[] getBoosts() The list of boosts added to the chat by the user
 *
 * @method bool isBoosts()
 *
 * @method $this setBoosts()
 *
 * @method $this unsetBoosts()
 *
 * @property ChatBoost[] $boosts The list of boosts added to the chat by the user
 *
 * @see https://core.telegram.org/bots/api#userchatboosts
 */
class UserChatBoosts extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'boosts' => 'ChatBoost[]',
    ];
}
