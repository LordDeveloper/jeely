<?php

namespace Jeely\Api\Types;

use Jeely\Mixins\InteractsWithChatJoinRequest;

/**
 * @class ChatJoinRequest
 * @description Represents a join request sent to a chat.
 *
 * @method Chat getChat() Chat to which the request was sent
 * @method User getFrom() User that sent the join request
 * @method int getUserChatId() Identifier of a private chat with the user who sent the join request. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed, assuming no other administrator contacted the user.
 * @method int getDate() Date the request was sent in Unix time
 * @method string getBio() Optional. Bio of the user
 * @method ChatInviteLink getInviteLink() Optional. Chat invite link that was used by the user to send the join request
 * @method string getQueryId() Optional. Identifier of the join request query; for bots assigned to process join requests only. If present, then the bot must call sendChatJoinRequestWebApp or directly call answerChatJoinRequestQuery within 10 seconds.
 *
 * @method bool isChat()
 * @method bool isFrom()
 * @method bool isUserChatId()
 * @method bool isDate()
 * @method bool isBio()
 * @method bool isInviteLink()
 * @method bool isQueryId()
 *
 * @method $this setChat()
 * @method $this setFrom()
 * @method $this setUserChatId()
 * @method $this setDate()
 * @method $this setBio()
 * @method $this setInviteLink()
 * @method $this setQueryId()
 *
 * @method $this unsetChat()
 * @method $this unsetFrom()
 * @method $this unsetUserChatId()
 * @method $this unsetDate()
 * @method $this unsetBio()
 * @method $this unsetInviteLink()
 * @method $this unsetQueryId()
 *
 * @property Chat $chat Chat to which the request was sent
 * @property User $from User that sent the join request
 * @property int $user_chat_id Identifier of a private chat with the user who sent the join request. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed, assuming no other administrator contacted the user.
 * @property int $date Date the request was sent in Unix time
 * @property string $bio Optional. Bio of the user
 * @property ChatInviteLink $invite_link Optional. Chat invite link that was used by the user to send the join request
 * @property string $query_id Optional. Identifier of the join request query; for bots assigned to process join requests only. If present, then the bot must call sendChatJoinRequestWebApp or directly call answerChatJoinRequestQuery within 10 seconds.
 *
 * @see https://core.telegram.org/bots/api#chatjoinrequest
 */
class ChatJoinRequest extends \Jeely\Nectar
{
    use InteractsWithChatJoinRequest;

    public const JSON_PROPERTY_MAP = [
        'chat' => 'Chat',
        'from' => 'User',
        'user_chat_id' => 'int',
        'date' => 'int',
        'bio' => 'string',
        'invite_link' => 'ChatInviteLink',
        'query_id' => 'string',
    ];
}
