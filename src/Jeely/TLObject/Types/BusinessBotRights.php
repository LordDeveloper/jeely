<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class BusinessBotRights
* @description Represents the rights of a business bot.
*
* @property	bool $can_reply Optional. True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours
* @method	bool getCanReply() Optional. True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours
* @method	bool isCanReply()
* @method	$this setCanReply()
* @method	$this unsetCanReply()

* @property	bool $can_read_messages Optional. True, if the bot can mark incoming private messages as read
* @method	bool getCanReadMessages() Optional. True, if the bot can mark incoming private messages as read
* @method	bool isCanReadMessages()
* @method	$this setCanReadMessages()
* @method	$this unsetCanReadMessages()

* @property	bool $can_delete_sent_messages Optional. True, if the bot can delete messages sent by the bot
* @method	bool getCanDeleteSentMessages() Optional. True, if the bot can delete messages sent by the bot
* @method	bool isCanDeleteSentMessages()
* @method	$this setCanDeleteSentMessages()
* @method	$this unsetCanDeleteSentMessages()

* @property	bool $can_delete_all_messages Optional. True, if the bot can delete all private messages in managed chats
* @method	bool getCanDeleteAllMessages() Optional. True, if the bot can delete all private messages in managed chats
* @method	bool isCanDeleteAllMessages()
* @method	$this setCanDeleteAllMessages()
* @method	$this unsetCanDeleteAllMessages()

* @property	bool $can_edit_name Optional. True, if the bot can edit the first and last name of the business account
* @method	bool getCanEditName() Optional. True, if the bot can edit the first and last name of the business account
* @method	bool isCanEditName()
* @method	$this setCanEditName()
* @method	$this unsetCanEditName()

* @property	bool $can_edit_bio Optional. True, if the bot can edit the bio of the business account
* @method	bool getCanEditBio() Optional. True, if the bot can edit the bio of the business account
* @method	bool isCanEditBio()
* @method	$this setCanEditBio()
* @method	$this unsetCanEditBio()

* @property	bool $can_edit_profile_photo Optional. True, if the bot can edit the profile photo of the business account
* @method	bool getCanEditProfilePhoto() Optional. True, if the bot can edit the profile photo of the business account
* @method	bool isCanEditProfilePhoto()
* @method	$this setCanEditProfilePhoto()
* @method	$this unsetCanEditProfilePhoto()

* @property	bool $can_edit_username Optional. True, if the bot can edit the username of the business account
* @method	bool getCanEditUsername() Optional. True, if the bot can edit the username of the business account
* @method	bool isCanEditUsername()
* @method	$this setCanEditUsername()
* @method	$this unsetCanEditUsername()

* @property	bool $can_change_gift_settings Optional. True, if the bot can change the privacy settings pertaining to gifts for the business account
* @method	bool getCanChangeGiftSettings() Optional. True, if the bot can change the privacy settings pertaining to gifts for the business account
* @method	bool isCanChangeGiftSettings()
* @method	$this setCanChangeGiftSettings()
* @method	$this unsetCanChangeGiftSettings()

* @property	bool $can_view_gifts_and_stars Optional. True, if the bot can view gifts and the amount of Telegram Stars owned by the business account
* @method	bool getCanViewGiftsAndStars() Optional. True, if the bot can view gifts and the amount of Telegram Stars owned by the business account
* @method	bool isCanViewGiftsAndStars()
* @method	$this setCanViewGiftsAndStars()
* @method	$this unsetCanViewGiftsAndStars()

* @property	bool $can_convert_gifts_to_stars Optional. True, if the bot can convert regular gifts owned by the business account to Telegram Stars
* @method	bool getCanConvertGiftsToStars() Optional. True, if the bot can convert regular gifts owned by the business account to Telegram Stars
* @method	bool isCanConvertGiftsToStars()
* @method	$this setCanConvertGiftsToStars()
* @method	$this unsetCanConvertGiftsToStars()

* @property	bool $can_transfer_and_upgrade_gifts Optional. True, if the bot can transfer and upgrade gifts owned by the business account
* @method	bool getCanTransferAndUpgradeGifts() Optional. True, if the bot can transfer and upgrade gifts owned by the business account
* @method	bool isCanTransferAndUpgradeGifts()
* @method	$this setCanTransferAndUpgradeGifts()
* @method	$this unsetCanTransferAndUpgradeGifts()

* @property	bool $can_transfer_stars Optional. True, if the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts
* @method	bool getCanTransferStars() Optional. True, if the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts
* @method	bool isCanTransferStars()
* @method	$this setCanTransferStars()
* @method	$this unsetCanTransferStars()

* @property	bool $can_manage_stories Optional. True, if the bot can post, edit and delete stories on behalf of the business account
* @method	bool getCanManageStories() Optional. True, if the bot can post, edit and delete stories on behalf of the business account
* @method	bool isCanManageStories()
* @method	$this setCanManageStories()
* @method	$this unsetCanManageStories()

*/

class BusinessBotRights extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'can_reply'=> 'bool',
		'can_read_messages'=> 'bool',
		'can_delete_sent_messages'=> 'bool',
		'can_delete_all_messages'=> 'bool',
		'can_edit_name'=> 'bool',
		'can_edit_bio'=> 'bool',
		'can_edit_profile_photo'=> 'bool',
		'can_edit_username'=> 'bool',
		'can_change_gift_settings'=> 'bool',
		'can_view_gifts_and_stars'=> 'bool',
		'can_convert_gifts_to_stars'=> 'bool',
		'can_transfer_and_upgrade_gifts'=> 'bool',
		'can_transfer_stars'=> 'bool',
		'can_manage_stories'=> 'bool',
	];

}