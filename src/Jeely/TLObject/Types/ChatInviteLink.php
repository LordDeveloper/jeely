<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class ChatInviteLink
* @description Represents an invite link for a chat.
*
* @property	string $invite_link The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
* @method	string getInviteLink() The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
* @method	bool isInviteLink()
* @method	$this setInviteLink()
* @method	$this unsetInviteLink()

* @property	User $creator Creator of the link
* @method	User getCreator() Creator of the link
* @method	bool isCreator()
* @method	$this setCreator()
* @method	$this unsetCreator()

* @property	bool $creates_join_request True, if users joining the chat via the link need to be approved by chat administrators
* @method	bool getCreatesJoinRequest() True, if users joining the chat via the link need to be approved by chat administrators
* @method	bool isCreatesJoinRequest()
* @method	$this setCreatesJoinRequest()
* @method	$this unsetCreatesJoinRequest()

* @property	bool $is_primary True, if the link is primary
* @method	bool getIsPrimary() True, if the link is primary
* @method	bool isIsPrimary()
* @method	$this setIsPrimary()
* @method	$this unsetIsPrimary()

* @property	bool $is_revoked True, if the link is revoked
* @method	bool getIsRevoked() True, if the link is revoked
* @method	bool isIsRevoked()
* @method	$this setIsRevoked()
* @method	$this unsetIsRevoked()

* @property	string $name Optional. Invite link name
* @method	string getName() Optional. Invite link name
* @method	bool isName()
* @method	$this setName()
* @method	$this unsetName()

* @property	int $expire_date Optional. Point in time (Unix timestamp) when the link will expire or has been expired
* @method	int getExpireDate() Optional. Point in time (Unix timestamp) when the link will expire or has been expired
* @method	bool isExpireDate()
* @method	$this setExpireDate()
* @method	$this unsetExpireDate()

* @property	int $member_limit Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
* @method	int getMemberLimit() Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
* @method	bool isMemberLimit()
* @method	$this setMemberLimit()
* @method	$this unsetMemberLimit()

* @property	int $pending_join_request_count Optional. Number of pending join requests created using this link
* @method	int getPendingJoinRequestCount() Optional. Number of pending join requests created using this link
* @method	bool isPendingJoinRequestCount()
* @method	$this setPendingJoinRequestCount()
* @method	$this unsetPendingJoinRequestCount()

* @property	int $subscription_period Optional. The number of seconds the subscription will be active for before the next payment
* @method	int getSubscriptionPeriod() Optional. The number of seconds the subscription will be active for before the next payment
* @method	bool isSubscriptionPeriod()
* @method	$this setSubscriptionPeriod()
* @method	$this unsetSubscriptionPeriod()

* @property	int $subscription_price Optional. The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat using the link
* @method	int getSubscriptionPrice() Optional. The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat using the link
* @method	bool isSubscriptionPrice()
* @method	$this setSubscriptionPrice()
* @method	$this unsetSubscriptionPrice()

*/

class ChatInviteLink extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'invite_link'=> 'string',
		'creator'=> 'User',
		'creates_join_request'=> 'bool',
		'is_primary'=> 'bool',
		'is_revoked'=> 'bool',
		'name'=> 'string',
		'expire_date'=> 'int',
		'member_limit'=> 'int',
		'pending_join_request_count'=> 'int',
		'subscription_period'=> 'int',
		'subscription_price'=> 'int',
	];

}