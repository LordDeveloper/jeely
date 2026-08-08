<?php

namespace Jeely\Api\Types;

/**
 * @class KeyboardButtonRequestManagedBot
 * @description This object defines the parameters for the creation of a managed bot. Information about the created bot will be shared with the bot using the update managed_bot and a Message with the field managed_bot_created.
 *
 * @method int getRequestId() Signed 32-bit identifier of the request. Must be unique within the message.
 * @method string getSuggestedName() Optional. Suggested name for the bot
 * @method string getSuggestedUsername() Optional. Suggested username for the bot
 *
 * @method bool isRequestId()
 * @method bool isSuggestedName()
 * @method bool isSuggestedUsername()
 *
 * @method $this setRequestId()
 * @method $this setSuggestedName()
 * @method $this setSuggestedUsername()
 *
 * @method $this unsetRequestId()
 * @method $this unsetSuggestedName()
 * @method $this unsetSuggestedUsername()
 *
 * @property int $request_id Signed 32-bit identifier of the request. Must be unique within the message.
 * @property string $suggested_name Optional. Suggested name for the bot
 * @property string $suggested_username Optional. Suggested username for the bot
 *
 * @see https://core.telegram.org/bots/api#keyboardbuttonrequestmanagedbot
 */
class KeyboardButtonRequestManagedBot extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'request_id' => 'int',
        'suggested_name' => 'string',
        'suggested_username' => 'string',
    ];
}
