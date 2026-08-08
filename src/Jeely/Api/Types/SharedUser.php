<?php

namespace Jeely\Api\Types;

/**
 * @class SharedUser
 * @description This object contains information about a user that was shared with the bot using a KeyboardButtonRequestUsers button.
 *
 * @method int getUserId() Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means.
 * @method string getFirstName() Optional. First name of the user, if the name was requested by the bot
 * @method string getLastName() Optional. Last name of the user, if the name was requested by the bot
 * @method string getUsername() Optional. Username of the user, if the username was requested by the bot
 * @method PhotoSize[] getPhoto() Optional. Available sizes of the chat photo, if the photo was requested by the bot
 *
 * @method bool isUserId()
 * @method bool isFirstName()
 * @method bool isLastName()
 * @method bool isUsername()
 * @method bool isPhoto()
 *
 * @method $this setUserId()
 * @method $this setFirstName()
 * @method $this setLastName()
 * @method $this setUsername()
 * @method $this setPhoto()
 *
 * @method $this unsetUserId()
 * @method $this unsetFirstName()
 * @method $this unsetLastName()
 * @method $this unsetUsername()
 * @method $this unsetPhoto()
 *
 * @property int $user_id Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means.
 * @property string $first_name Optional. First name of the user, if the name was requested by the bot
 * @property string $last_name Optional. Last name of the user, if the name was requested by the bot
 * @property string $username Optional. Username of the user, if the username was requested by the bot
 * @property PhotoSize[] $photo Optional. Available sizes of the chat photo, if the photo was requested by the bot
 *
 * @see https://core.telegram.org/bots/api#shareduser
 */
class SharedUser extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'user_id' => 'int',
        'first_name' => 'string',
        'last_name' => 'string',
        'username' => 'string',
        'photo' => 'PhotoSize[]',
    ];
}
