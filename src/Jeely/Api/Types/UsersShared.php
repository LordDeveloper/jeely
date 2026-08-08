<?php

namespace Jeely\Api\Types;

/**
 * @class UsersShared
 * @description This object contains information about the users whose identifiers were shared with the bot using a KeyboardButtonRequestUsers button.
 *
 * @method int getRequestId() Identifier of the request
 * @method SharedUser[] getUsers() Information about users shared with the bot
 *
 * @method bool isRequestId()
 * @method bool isUsers()
 *
 * @method $this setRequestId()
 * @method $this setUsers()
 *
 * @method $this unsetRequestId()
 * @method $this unsetUsers()
 *
 * @property int $request_id Identifier of the request
 * @property SharedUser[] $users Information about users shared with the bot
 *
 * @see https://core.telegram.org/bots/api#usersshared
 */
class UsersShared extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'request_id' => 'int',
        'users' => 'SharedUser[]',
    ];
}
