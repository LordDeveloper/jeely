<?php

namespace Jeely\Api\Types;

/**
 * @class BotAccessSettings
 * @description This object describes the access settings of a bot.
 *
 * @method bool getIsAccessRestricted() True, if only selected users can access the bot. The bot's owner can always access it.
 * @method User[] getAddedUsers() Optional. The list of other users who have access to the bot if the access is restricted
 *
 * @method bool isIsAccessRestricted()
 * @method bool isAddedUsers()
 *
 * @method $this setIsAccessRestricted()
 * @method $this setAddedUsers()
 *
 * @method $this unsetIsAccessRestricted()
 * @method $this unsetAddedUsers()
 *
 * @property bool $is_access_restricted True, if only selected users can access the bot. The bot's owner can always access it.
 * @property User[] $added_users Optional. The list of other users who have access to the bot if the access is restricted
 *
 * @see https://core.telegram.org/bots/api#botaccesssettings
 */
class BotAccessSettings extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'is_access_restricted' => 'bool',
        'added_users' => 'User[]',
    ];
}
