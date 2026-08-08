<?php

namespace Jeely\Api\Types;

use Jeely\Mixins\InteractsWithChatMemberUpdated;

/**
 * @class ChatMemberUpdated
 * @description This object represents changes in the status of a chat member.
 *
 * @method Chat getChat() Chat the user belongs to
 * @method User getFrom() Performer of the action, which resulted in the change
 * @method int getDate() Date the change was done in Unix time
 * @method ChatMember getOldChatMember() Previous information about the chat member
 * @method ChatMember getNewChatMember() New information about the chat member
 * @method ChatInviteLink getInviteLink() Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only
 * @method bool getViaJoinRequest() Optional. True, if the user joined the chat after sending a direct join request without using an invite link and being approved by an administrator
 * @method bool getViaChatFolderInviteLink() Optional. True, if the user joined the chat via a chat folder invite link
 *
 * @method bool isChat()
 * @method bool isFrom()
 * @method bool isDate()
 * @method bool isOldChatMember()
 * @method bool isNewChatMember()
 * @method bool isInviteLink()
 * @method bool isViaJoinRequest()
 * @method bool isViaChatFolderInviteLink()
 *
 * @method $this setChat()
 * @method $this setFrom()
 * @method $this setDate()
 * @method $this setOldChatMember()
 * @method $this setNewChatMember()
 * @method $this setInviteLink()
 * @method $this setViaJoinRequest()
 * @method $this setViaChatFolderInviteLink()
 *
 * @method $this unsetChat()
 * @method $this unsetFrom()
 * @method $this unsetDate()
 * @method $this unsetOldChatMember()
 * @method $this unsetNewChatMember()
 * @method $this unsetInviteLink()
 * @method $this unsetViaJoinRequest()
 * @method $this unsetViaChatFolderInviteLink()
 *
 * @property Chat $chat Chat the user belongs to
 * @property User $from Performer of the action, which resulted in the change
 * @property int $date Date the change was done in Unix time
 * @property ChatMember $old_chat_member Previous information about the chat member
 * @property ChatMember $new_chat_member New information about the chat member
 * @property ChatInviteLink $invite_link Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only
 * @property bool $via_join_request Optional. True, if the user joined the chat after sending a direct join request without using an invite link and being approved by an administrator
 * @property bool $via_chat_folder_invite_link Optional. True, if the user joined the chat via a chat folder invite link
 *
 * @see https://core.telegram.org/bots/api#chatmemberupdated
 */
class ChatMemberUpdated extends \Jeely\Nectar
{
    use InteractsWithChatMemberUpdated;

    public const JSON_PROPERTY_MAP = [
        'chat' => 'Chat',
        'from' => 'User',
        'date' => 'int',
        'old_chat_member' => 'ChatMember',
        'new_chat_member' => 'ChatMember',
        'invite_link' => 'ChatInviteLink',
        'via_join_request' => 'bool',
        'via_chat_folder_invite_link' => 'bool',
    ];
}
