<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class ChatInviteLink
 * @description Represents an invite link for a chat.
 *
 * @method string getInviteLink() The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
 * @method User getCreator() Creator of the link
 * @method bool getCreatesJoinRequest() True, if users joining the chat via the link need to be approved by chat administrators
 * @method bool getIsPrimary() True, if the link is primary
 * @method bool getIsRevoked() True, if the link is revoked
 * @method string getName() Optional. Invite link name
 * @method int getExpireDate() Optional. Point in time (Unix timestamp) when the link will expire or has been expired
 * @method int getMemberLimit() Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
 * @method int getPendingJoinRequestCount() Optional. Number of pending join requests created using this link
 *
 * @method bool isInviteLink()
 * @method bool isCreator()
 * @method bool isCreatesJoinRequest()
 * @method bool isIsPrimary()
 * @method bool isIsRevoked()
 * @method bool isName()
 * @method bool isExpireDate()
 * @method bool isMemberLimit()
 * @method bool isPendingJoinRequestCount()
 *
 * @method $this setInviteLink()
 * @method $this setCreator()
 * @method $this setCreatesJoinRequest()
 * @method $this setIsPrimary()
 * @method $this setIsRevoked()
 * @method $this setName()
 * @method $this setExpireDate()
 * @method $this setMemberLimit()
 * @method $this setPendingJoinRequestCount()
 *
 * @method $this unsetInviteLink()
 * @method $this unsetCreator()
 * @method $this unsetCreatesJoinRequest()
 * @method $this unsetIsPrimary()
 * @method $this unsetIsRevoked()
 * @method $this unsetName()
 * @method $this unsetExpireDate()
 * @method $this unsetMemberLimit()
 * @method $this unsetPendingJoinRequestCount()
 *
 * @property string $invite_link The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
 * @property User $creator Creator of the link
 * @property bool $creates_join_request True, if users joining the chat via the link need to be approved by chat administrators
 * @property bool $is_primary True, if the link is primary
 * @property bool $is_revoked True, if the link is revoked
 * @property string $name Optional. Invite link name
 * @property int $expire_date Optional. Point in time (Unix timestamp) when the link will expire or has been expired
 * @property int $member_limit Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
 * @property int $pending_join_request_count Optional. Number of pending join requests created using this link
 *
 * @see https://core.telegram.org/bots/api#chatinvitelink 
 */
class ChatInviteLink extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
		'invite_link' => 'string',
		'creator' => 'User',
		'creates_join_request' => 'bool',
		'is_primary' => 'bool',
		'is_revoked' => 'bool',
		'name' => 'string',
		'expire_date' => 'int',
		'member_limit' => 'int',
		'pending_join_request_count' => 'int',
	];
}