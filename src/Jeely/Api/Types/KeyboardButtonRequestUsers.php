<?php

namespace Jeely\Api\Types;

/**
 * @class KeyboardButtonRequestUsers
 * @description This object defines the criteria used to request suitable users. Information about the selected users will be shared with the bot when the corresponding button is pressed. More about requesting users »
 *
 * @method int getRequestId() Signed 32-bit identifier of the request that will be received back in the UsersShared object. Must be unique within the message.
 * @method bool getUserIsBot() Optional. Pass True to request bots, pass False to request regular users. If not specified, no additional restrictions are applied.
 * @method bool getUserIsPremium() Optional. Pass True to request premium users, pass False to request non-premium users. If not specified, no additional restrictions are applied.
 * @method int getMaxQuantity() Optional. The maximum number of users to be selected; 1-10. Defaults to 1.
 * @method bool getRequestName() Optional. Pass True to request the users' first and last names
 * @method bool getRequestUsername() Optional. Pass True to request the users' usernames
 * @method bool getRequestPhoto() Optional. Pass True to request the users' photos
 *
 * @method bool isRequestId()
 * @method bool isUserIsBot()
 * @method bool isUserIsPremium()
 * @method bool isMaxQuantity()
 * @method bool isRequestName()
 * @method bool isRequestUsername()
 * @method bool isRequestPhoto()
 *
 * @method $this setRequestId()
 * @method $this setUserIsBot()
 * @method $this setUserIsPremium()
 * @method $this setMaxQuantity()
 * @method $this setRequestName()
 * @method $this setRequestUsername()
 * @method $this setRequestPhoto()
 *
 * @method $this unsetRequestId()
 * @method $this unsetUserIsBot()
 * @method $this unsetUserIsPremium()
 * @method $this unsetMaxQuantity()
 * @method $this unsetRequestName()
 * @method $this unsetRequestUsername()
 * @method $this unsetRequestPhoto()
 *
 * @property int $request_id Signed 32-bit identifier of the request that will be received back in the UsersShared object. Must be unique within the message.
 * @property bool $user_is_bot Optional. Pass True to request bots, pass False to request regular users. If not specified, no additional restrictions are applied.
 * @property bool $user_is_premium Optional. Pass True to request premium users, pass False to request non-premium users. If not specified, no additional restrictions are applied.
 * @property int $max_quantity Optional. The maximum number of users to be selected; 1-10. Defaults to 1.
 * @property bool $request_name Optional. Pass True to request the users' first and last names
 * @property bool $request_username Optional. Pass True to request the users' usernames
 * @property bool $request_photo Optional. Pass True to request the users' photos
 *
 * @see https://core.telegram.org/bots/api#keyboardbuttonrequestusers
 */
class KeyboardButtonRequestUsers extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'request_id' => 'int',
        'user_is_bot' => 'bool',
        'user_is_premium' => 'bool',
        'max_quantity' => 'int',
        'request_name' => 'bool',
        'request_username' => 'bool',
        'request_photo' => 'bool',
    ];
}
