<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class ChatMemberUpdated
 * @description This object represents changes in the status of a chat member.
 *
 * @method Chat getChat() Chat the user belongs to
 * @method User getFrom() Performer of the action, which resulted in the change
 * @method int getDate() Date the change was done in Unix time
 * @method ChatMember getOldChatMember() Previous information about the chat member
 * @method ChatMember getNewChatMember() New information about the chat member
 * @method ChatInviteLink getInviteLink() Optional. Chat invite link, which was used by the user to join the chat;
for joining by invite link events only.
 *
 * @method bool isChat()
 * @method bool isFrom()
 * @method bool isDate()
 * @method bool isOldChatMember()
 * @method bool isNewChatMember()
 * @method bool isInviteLink()
 *
 * @method $this setChat()
 * @method $this setFrom()
 * @method $this setDate()
 * @method $this setOldChatMember()
 * @method $this setNewChatMember()
 * @method $this setInviteLink()
 *
 * @method $this unsetChat()
 * @method $this unsetFrom()
 * @method $this unsetDate()
 * @method $this unsetOldChatMember()
 * @method $this unsetNewChatMember()
 * @method $this unsetInviteLink()
 *
 * @property Chat $chat Chat the user belongs to
 * @property User $from Performer of the action, which resulted in the change
 * @property int $date Date the change was done in Unix time
 * @property ChatMember $old_chat_member Previous information about the chat member
 * @property ChatMember $new_chat_member New information about the chat member
 * @property ChatInviteLink $invite_link Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
 *
 * @see https://core.telegram.org/bots/api#chatmemberupdated
 */
class ChatMemberUpdated extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'chat' => 'Chat',
        'from' => 'User',
        'date' => 'int',
        'old_chat_member' => 'ChatMember',
        'new_chat_member' => 'ChatMember',
        'invite_link' => 'ChatInviteLink',
    ];
}