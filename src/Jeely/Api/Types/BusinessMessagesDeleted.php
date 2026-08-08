<?php

namespace Jeely\Api\Types;

/**
 * @class BusinessMessagesDeleted
 * @description This object is received when messages are deleted from a connected business account.
 *
 * @method string getBusinessConnectionId() Unique identifier of the business connection
 * @method Chat getChat() Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.
 * @method int[] getMessageIds() The list of identifiers of deleted messages in the chat of the business account
 *
 * @method bool isBusinessConnectionId()
 * @method bool isChat()
 * @method bool isMessageIds()
 *
 * @method $this setBusinessConnectionId()
 * @method $this setChat()
 * @method $this setMessageIds()
 *
 * @method $this unsetBusinessConnectionId()
 * @method $this unsetChat()
 * @method $this unsetMessageIds()
 *
 * @property string $business_connection_id Unique identifier of the business connection
 * @property Chat $chat Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.
 * @property int[] $message_ids The list of identifiers of deleted messages in the chat of the business account
 *
 * @see https://core.telegram.org/bots/api#businessmessagesdeleted
 */
class BusinessMessagesDeleted extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'business_connection_id' => 'string',
        'chat' => 'Chat',
        'message_ids' => 'int[]',
    ];
}
