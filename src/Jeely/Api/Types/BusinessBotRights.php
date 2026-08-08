<?php

namespace Jeely\Api\Types;

/**
 * @class BusinessBotRights
 * @description Represents the rights of a business bot.
 *
 * @method bool getCanReply() Optional. True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours
 * @method bool getCanReadMessages() Optional. True, if the bot can mark incoming private messages as read
 * @method bool getCanDeleteSentMessages() Optional. True, if the bot can delete messages sent by the bot
 * @method bool getCanDeleteAllMessages() Optional. True, if the bot can delete all private messages in managed chats
 * @method bool getCanEditName() Optional. True, if the bot can edit the first and last name of the business account
 * @method bool getCanEditBio() Optional. True, if the bot can edit the bio of the business account
 * @method bool getCanEditProfilePhoto() Optional. True, if the bot can edit the profile photo of the business account
 * @method bool getCanEditUsername() Optional. True, if the bot can edit the username of the business account
 * @method bool getCanChangeGiftSettings() Optional. True, if the bot can change the privacy settings pertaining to gifts for the business account
 * @method bool getCanViewGiftsAndStars() Optional. True, if the bot can view gifts and the amount of Telegram Stars owned by the business account
 * @method bool getCanConvertGiftsToStars() Optional. True, if the bot can convert regular gifts owned by the business account to Telegram Stars
 * @method bool getCanTransferAndUpgradeGifts() Optional. True, if the bot can transfer and upgrade gifts owned by the business account
 * @method bool getCanTransferStars() Optional. True, if the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts
 * @method bool getCanManageStories() Optional. True, if the bot can post, edit and delete stories on behalf of the business account
 *
 * @method bool isCanReply()
 * @method bool isCanReadMessages()
 * @method bool isCanDeleteSentMessages()
 * @method bool isCanDeleteAllMessages()
 * @method bool isCanEditName()
 * @method bool isCanEditBio()
 * @method bool isCanEditProfilePhoto()
 * @method bool isCanEditUsername()
 * @method bool isCanChangeGiftSettings()
 * @method bool isCanViewGiftsAndStars()
 * @method bool isCanConvertGiftsToStars()
 * @method bool isCanTransferAndUpgradeGifts()
 * @method bool isCanTransferStars()
 * @method bool isCanManageStories()
 *
 * @method $this setCanReply()
 * @method $this setCanReadMessages()
 * @method $this setCanDeleteSentMessages()
 * @method $this setCanDeleteAllMessages()
 * @method $this setCanEditName()
 * @method $this setCanEditBio()
 * @method $this setCanEditProfilePhoto()
 * @method $this setCanEditUsername()
 * @method $this setCanChangeGiftSettings()
 * @method $this setCanViewGiftsAndStars()
 * @method $this setCanConvertGiftsToStars()
 * @method $this setCanTransferAndUpgradeGifts()
 * @method $this setCanTransferStars()
 * @method $this setCanManageStories()
 *
 * @method $this unsetCanReply()
 * @method $this unsetCanReadMessages()
 * @method $this unsetCanDeleteSentMessages()
 * @method $this unsetCanDeleteAllMessages()
 * @method $this unsetCanEditName()
 * @method $this unsetCanEditBio()
 * @method $this unsetCanEditProfilePhoto()
 * @method $this unsetCanEditUsername()
 * @method $this unsetCanChangeGiftSettings()
 * @method $this unsetCanViewGiftsAndStars()
 * @method $this unsetCanConvertGiftsToStars()
 * @method $this unsetCanTransferAndUpgradeGifts()
 * @method $this unsetCanTransferStars()
 * @method $this unsetCanManageStories()
 *
 * @property bool $can_reply Optional. True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours
 * @property bool $can_read_messages Optional. True, if the bot can mark incoming private messages as read
 * @property bool $can_delete_sent_messages Optional. True, if the bot can delete messages sent by the bot
 * @property bool $can_delete_all_messages Optional. True, if the bot can delete all private messages in managed chats
 * @property bool $can_edit_name Optional. True, if the bot can edit the first and last name of the business account
 * @property bool $can_edit_bio Optional. True, if the bot can edit the bio of the business account
 * @property bool $can_edit_profile_photo Optional. True, if the bot can edit the profile photo of the business account
 * @property bool $can_edit_username Optional. True, if the bot can edit the username of the business account
 * @property bool $can_change_gift_settings Optional. True, if the bot can change the privacy settings pertaining to gifts for the business account
 * @property bool $can_view_gifts_and_stars Optional. True, if the bot can view gifts and the amount of Telegram Stars owned by the business account
 * @property bool $can_convert_gifts_to_stars Optional. True, if the bot can convert regular gifts owned by the business account to Telegram Stars
 * @property bool $can_transfer_and_upgrade_gifts Optional. True, if the bot can transfer and upgrade gifts owned by the business account
 * @property bool $can_transfer_stars Optional. True, if the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts
 * @property bool $can_manage_stories Optional. True, if the bot can post, edit and delete stories on behalf of the business account
 *
 * @see https://core.telegram.org/bots/api#businessbotrights
 */
class BusinessBotRights extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'can_reply' => 'bool',
        'can_read_messages' => 'bool',
        'can_delete_sent_messages' => 'bool',
        'can_delete_all_messages' => 'bool',
        'can_edit_name' => 'bool',
        'can_edit_bio' => 'bool',
        'can_edit_profile_photo' => 'bool',
        'can_edit_username' => 'bool',
        'can_change_gift_settings' => 'bool',
        'can_view_gifts_and_stars' => 'bool',
        'can_convert_gifts_to_stars' => 'bool',
        'can_transfer_and_upgrade_gifts' => 'bool',
        'can_transfer_stars' => 'bool',
        'can_manage_stories' => 'bool',
    ];
}
