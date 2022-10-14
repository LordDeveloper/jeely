<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class ChatJoinRequest
 * @description Represents a join request sent to a chat.
 *
 * @method Chat getChat() Chat to which the request was sent
 * @method User getFrom() User that sent the join request
 * @method int getDate() Date the request was sent in Unix time
 * @method string getBio() Optional. Bio of the user.
 * @method ChatInviteLink getInviteLink() Optional. Chat invite link that was used by the user to send the join request
 *
 * @method bool isChat()
 * @method bool isFrom()
 * @method bool isDate()
 * @method bool isBio()
 * @method bool isInviteLink()
 *
 * @method $this setChat()
 * @method $this setFrom()
 * @method $this setDate()
 * @method $this setBio()
 * @method $this setInviteLink()
 *
 * @method $this unsetChat()
 * @method $this unsetFrom()
 * @method $this unsetDate()
 * @method $this unsetBio()
 * @method $this unsetInviteLink()
 *
 * @property Chat $chat Chat to which the request was sent
 * @property User $from User that sent the join request
 * @property int $date Date the request was sent in Unix time
 * @property string $bio Optional. Bio of the user.
 * @property ChatInviteLink $invite_link Optional. Chat invite link that was used by the user to send the join request
 *
 * @see https://core.telegram.org/bots/api#chatjoinrequest 
 */
class ChatJoinRequest extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'chat' => 'Chat',
		'from' => 'User',
		'date' => 'int',
		'bio' => 'string',
		'invite_link' => 'ChatInviteLink',
	];
}