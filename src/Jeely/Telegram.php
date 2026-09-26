<?php

namespace Jeely;

use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Utils;
use Jeely\Api\Methods\MethodDefinitionInterface;
use Jeely\Api\Types\Error;
use Jeely\Api\Types\ForceReply;
use Jeely\Api\Types\InlineKeyboardButton;
use Jeely\Api\Types\InlineKeyboardMarkup;
use Jeely\Api\Types\KeyboardButton;
use Jeely\Api\Types\KeyboardButtonInterface;
use Jeely\Api\Types\ReplyKeyboardMarkup;
use Jeely\Api\Types\ReplyKeyboardRemove;
use Jeely\Tools\Constant;
use Jeely\Tools\Utils as ValueUtils;
use Psr\Http\Message\ResponseInterface;
use Throwable;

/**
 * @class Telegram
 *
 * @method Update[] getUpdates(...$params) Use this method to receive incoming updates using long polling (wiki). Returns an Array of Update objects.
 * @method bool setWebhook(...$params) Use this method to specify a URL and receive incoming updates via an outgoing webhook. Whenever there is an update for the bot, we will send an HTTPS POST request to the specified URL, containing a JSON-serialized Update. In case of an unsuccessful request (a request with response HTTP status code different from 2XY), we will repeat the request and give up after a reasonable amount of attempts. Returns True on success. If you'd like to make sure that the webhook was set by you, you can specify secret data in the parameter secret_token. If specified, the request will contain a header “X-Telegram-Bot-Api-Secret-Token” with the secret token as content.
 * @method bool deleteWebhook(...$params) Use this method to remove webhook integration if you decide to switch back to getUpdates. Returns True on success.
 * @method WebhookInfo getWebhookInfo(...$params) Use this method to get current webhook status. Requires no parameters. On success, returns a WebhookInfo object. If the bot is using getUpdates, will return an object with the url field empty.
 * @method User getMe(...$params) A simple method for testing your bot's authentication token. Requires no parameters. Returns basic information about the bot in form of a User object.
 * @method bool logOut(...$params) Use this method to log out from the cloud Bot API server before launching the bot locally. You must log out the bot before running it locally, otherwise there is no guarantee that the bot will receive updates. After a successful call, you can immediately log in on a local server, but will not be able to log in back to the cloud Bot API server for 10 minutes. Returns True on success. Requires no parameters.
 * @method bool close(...$params) Use this method to close the bot instance before moving it from one local server to another. You need to delete the webhook before calling this method to ensure that the bot isn't launched again after server restart. The method will return error 429 in the first 10 minutes after the bot is launched. Returns True on success. Requires no parameters.
 * @method Message sendMessage(...$params) Use this method to send text messages. On success, the sent Message is returned.
 * @method Message forwardMessage(...$params) Use this method to forward messages of any kind. Service messages and messages with protected content can't be forwarded. On success, the sent Message is returned.
 * @method MessageId[] forwardMessages(...$params) Use this method to forward multiple messages of any kind. If some of the specified messages can't be found or forwarded, they are skipped. Service messages and messages with protected content can't be forwarded. Album grouping is kept for forwarded messages. On success, an Array of MessageId of the sent messages is returned.
 * @method MessageId copyMessage(...$params) Use this method to copy messages of any kind. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz poll can be copied only if the value of the field correct_option_ids is known to the bot. The method is analogous to the method forwardMessage, but the copied message doesn't have a link to the original message. Returns the MessageId of the sent message on success.
 * @method MessageId[] copyMessages(...$params) Use this method to copy messages of any kind. If some of the specified messages can't be found or copied, they are skipped. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz poll can be copied only if the value of the field correct_option_ids is known to the bot. The method is analogous to the method forwardMessages, but the copied messages don't have a link to the original message. Album grouping is kept for copied messages. On success, an Array of MessageId of the sent messages is returned.
 * @method Message sendPhoto(...$params) Use this method to send photos. On success, the sent Message is returned.
 * @method Message sendLivePhoto(...$params) Use this method to send live photos. On success, the sent Message is returned.
 * @method Message sendAudio(...$params) Use this method to send audio files, if you want Telegram clients to display them in the music player. Your audio must be in the .MP3 or .M4A format. On success, the sent Message is returned. Bots can currently send audio files of up to 50 MB in size, this limit may be changed in the future. For sending voice messages, use the sendVoice method instead.
 * @method Message sendDocument(...$params) Use this method to send general files. On success, the sent Message is returned. Bots can currently send files of any type of up to 50 MB in size, this limit may be changed in the future.
 * @method Message sendVideo(...$params) Use this method to send video files, Telegram clients support MPEG4 videos (other formats may be sent as Document). On success, the sent Message is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future.
 * @method Message sendAnimation(...$params) Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On success, the sent Message is returned. Bots can currently send animation files of up to 50 MB in size, this limit may be changed in the future.
 * @method Message sendVoice(...$params) Use this method to send audio files, if you want Telegram clients to display the file as a playable voice message. For this to work, your audio must be in an .OGG file encoded with OPUS, or in .MP3 format, or in .M4A format (other formats may be sent as Audio or Document). On success, the sent Message is returned. Bots can currently send voice messages of up to 50 MB in size, this limit may be changed in the future.
 * @method Message sendVideoNote(...$params) As of v.4.0, Telegram clients support rounded square MPEG4 videos of up to 1 minute long. Use this method to send video messages. On success, the sent Message is returned.
 * @method Message sendPaidMedia(...$params) Use this method to send paid media. On success, the sent Message is returned.
 * @method Message[] sendMediaGroup(...$params) Use this method to send a group of photos, live photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an Array of Message objects that were sent is returned.
 * @method Message sendLocation(...$params) Use this method to send point on the map. On success, the sent Message is returned.
 * @method Message sendVenue(...$params) Use this method to send information about a venue. On success, the sent Message is returned.
 * @method Message sendContact(...$params) Use this method to send phone contacts. On success, the sent Message is returned.
 * @method Message sendPoll(...$params) Use this method to send a native poll. On success, the sent Message is returned.
 * @method Message sendChecklist(...$params) Use this method to send a checklist on behalf of a connected business account. On success, the sent Message is returned.
 * @method Message sendDice(...$params) Use this method to send an animated emoji that will display a random value. On success, the sent Message is returned.
 * @method bool sendMessageDraft(...$params) Use this method to stream a partial message to a user while the message is being generated. Note that the streamed draft is ephemeral and acts as a temporary 30-second preview - once the output is finalized, you must call sendMessage with the complete message to persist it in the user's chat. Returns True on success.
 * @method bool sendChatAction(...$params) Use this method when you need to tell the user that something is happening on the bot's side. The status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear its typing status). Returns True on success. We only recommend using this method when a response from the bot will take a noticeable amount of time to arrive.
 * @method bool setMessageReaction(...$params) Use this method to change the chosen reactions on a message. Service messages of some types can't be reacted to. Automatically forwarded messages from a channel to its discussion group have the same available reactions as messages in the channel. Bots can't use paid reactions. Returns True on success.
 * @method UserProfilePhotos getUserProfilePhotos(...$params) Use this method to get a list of profile pictures for a user. Returns a UserProfilePhotos object.
 * @method UserProfileAudios getUserProfileAudios(...$params) Use this method to get a list of profile audios for a user. Returns a UserProfileAudios object.
 * @method bool setUserEmojiStatus(...$params) Changes the emoji status for a given user that previously allowed the bot to manage their emoji status via the Mini App method requestEmojiStatusAccess. Returns True on success.
 * @method File getFile(...$params) Use this method to get basic information about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a File object is returned. The file can then be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile again.
 * @method bool banChatMember(...$params) Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the chat on their own using invite links, etc., unless unbanned first. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 * @method bool unbanChatMember(...$params) Use this method to unban a previously banned user in a supergroup or channel. The user will not return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be removed from the chat. If you don't want this, use the parameter only_if_banned. Returns True on success.
 * @method bool restrictChatMember(...$params) Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights. Pass True for all permissions to lift restrictions from a user. Returns True on success.
 * @method bool promoteChatMember(...$params) Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass False for all boolean parameters to demote a user. Returns True on success.
 * @method bool setChatAdministratorCustomTitle(...$params) Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns True on success.
 * @method bool setChatMemberTag(...$params) Use this method to set a tag for a regular member in a group or a supergroup. The bot must be an administrator in the chat for this to work and must have the can_manage_tags administrator right. Returns True on success.
 * @method bool banChatSenderChat(...$params) Use this method to ban a channel chat in a supergroup or a channel. Until the chat is unbanned, the owner of the banned chat won't be able to send messages on behalf of any of their channels. The bot must be an administrator in the supergroup or channel for this to work and must have the appropriate administrator rights. Returns True on success.
 * @method bool unbanChatSenderChat(...$params) Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns True on success.
 * @method bool setChatPermissions(...$params) Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the can_restrict_members administrator rights. Returns True on success.
 * @method string exportChatInviteLink(...$params) Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the new invite link as String on success.
 * @method ChatInviteLink createChatInviteLink(...$params) Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. The link can be revoked using the method revokeChatInviteLink. Returns the new invite link as ChatInviteLink object.
 * @method ChatInviteLink editChatInviteLink(...$params) Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the edited invite link as a ChatInviteLink object.
 * @method ChatInviteLink createChatSubscriptionInviteLink(...$params) Use this method to create a subscription invite link for a channel chat. The bot must have the can_invite_users administrator rights. The link can be edited using the method editChatSubscriptionInviteLink or revoked using the method revokeChatInviteLink. Returns the new invite link as a ChatInviteLink object.
 * @method ChatInviteLink editChatSubscriptionInviteLink(...$params) Use this method to edit a subscription invite link created by the bot. The bot must have the can_invite_users administrator rights. Returns the edited invite link as a ChatInviteLink object.
 * @method ChatInviteLink revokeChatInviteLink(...$params) Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as ChatInviteLink object.
 * @method bool approveChatJoinRequest(...$params) Use this method to approve a chat join request. The bot must be an administrator in the chat for this to work and must have the can_invite_users administrator right. Returns True on success.
 * @method bool declineChatJoinRequest(...$params) Use this method to decline a chat join request. The bot must be an administrator in the chat for this to work and must have the can_invite_users administrator right. Returns True on success.
 * @method bool answerChatJoinRequestQuery(...$params) Use this method to process a received chat join request query. Returns True on success.
 * @method bool sendChatJoinRequestWebApp(...$params) Use this method to process a received chat join request query by showing a Mini App to the user before deciding the outcome. Call answerChatJoinRequestQuery to resolve the join request query based on the user interaction with the Mini App. Returns True on success.
 * @method bool setChatPhoto(...$params) Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 * @method bool deleteChatPhoto(...$params) Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 * @method bool setChatTitle(...$params) Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 * @method bool setChatDescription(...$params) Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
 * @method bool pinChatMessage(...$params) Use this method to add a message to the list of pinned messages in a chat. In private chats and channel direct messages chats, all non-service messages can be pinned. Conversely, the bot must be an administrator with the 'can_pin_messages' right or the 'can_edit_messages' right to pin messages in groups and channels respectively. Returns True on success.
 * @method bool unpinChatMessage(...$params) Use this method to remove a message from the list of pinned messages in a chat. In private chats and channel direct messages chats, all messages can be unpinned. Conversely, the bot must be an administrator with the 'can_pin_messages' right or the 'can_edit_messages' right to unpin messages in groups and channels respectively. Returns True on success.
 * @method bool unpinAllChatMessages(...$params) Use this method to clear the list of pinned messages in a chat. In private chats and channel direct messages chats, no additional rights are required to unpin all pinned messages. Conversely, the bot must be an administrator with the 'can_pin_messages' right or the 'can_edit_messages' right to unpin all pinned messages in groups and channels respectively. Returns True on success.
 * @method bool leaveChat(...$params) Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
 * @method ChatFullInfo getChat(...$params) Use this method to get up-to-date information about the chat. Returns a ChatFullInfo object on success.
 * @method ChatMember[] getChatAdministrators(...$params) Use this method to get a list of administrators in a chat. Returns an Array of ChatMember objects.
 * @method int getChatMemberCount(...$params) Use this method to get the number of members in a chat. Returns Integer on success.
 * @method ChatMember getChatMember(...$params) Use this method to get information about a member of a chat. The method is only guaranteed to work for other users if the bot is an administrator in the chat. Returns a ChatMember object on success.
 * @method Message[] getUserPersonalChatMessages(...$params) Use this method to get the last messages from the personal chat (i.e., the chat currently added to their profile) of a given user. On success, an Array of Message objects is returned.
 * @method bool setChatStickerSet(...$params) Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
 * @method bool deleteChatStickerSet(...$params) Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
 * @method Sticker[] getForumTopicIconStickers(...$params) Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user. Requires no parameters. Returns an Array of Sticker objects.
 * @method ForumTopic createForumTopic(...$params) Use this method to create a topic in a forum supergroup chat or a private chat with a user. In the case of a supergroup chat the bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator right. Returns information about the created topic as a ForumTopic object.
 * @method bool editForumTopic(...$params) Use this method to edit name and icon of a topic in a forum supergroup chat or a private chat with a user. In the case of a supergroup chat the bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
 * @method bool closeForumTopic(...$params) Use this method to close an open topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
 * @method bool reopenForumTopic(...$params) Use this method to reopen a closed topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
 * @method bool deleteForumTopic(...$params) Use this method to delete a forum topic along with all its messages in a forum supergroup chat or a private chat with a user. In the case of a supergroup chat the bot must be an administrator in the chat for this to work and must have the can_delete_messages administrator rights. Returns True on success.
 * @method bool unpinAllForumTopicMessages(...$params) Use this method to clear the list of pinned messages in a forum topic in a forum supergroup chat or a private chat with a user. In the case of a supergroup chat the bot must be an administrator in the chat for this to work and must have the can_pin_messages administrator right in the supergroup. Returns True on success.
 * @method bool editGeneralForumTopic(...$params) Use this method to edit the name of the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns True on success.
 * @method bool closeGeneralForumTopic(...$params) Use this method to close an open 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns True on success.
 * @method bool reopenGeneralForumTopic(...$params) Use this method to reopen a closed 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. The topic will be automatically unhidden if it was hidden. Returns True on success.
 * @method bool hideGeneralForumTopic(...$params) Use this method to hide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. The topic will be automatically closed if it was open. Returns True on success.
 * @method bool unhideGeneralForumTopic(...$params) Use this method to unhide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns True on success.
 * @method bool unpinAllGeneralForumTopicMessages(...$params) Use this method to clear the list of pinned messages in a General forum topic. The bot must be an administrator in the chat for this to work and must have the can_pin_messages administrator right in the supergroup. Returns True on success.
 * @method bool answerCallbackQuery(...$params) Use this method to send answers to callback queries sent from inline keyboards. The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, True is returned.
 * @method SentGuestMessage answerGuestQuery(...$params) Use this method to reply to a received guest message. On success, a SentGuestMessage object is returned.
 * @method UserChatBoosts getUserChatBoosts(...$params) Use this method to get the list of boosts added to a chat by a user. Requires administrator rights in the chat. Returns a UserChatBoosts object.
 * @method BusinessConnection getBusinessConnection(...$params) Use this method to get information about the connection of the bot with a business account. Returns a BusinessConnection object on success.
 * @method string getManagedBotToken(...$params) Use this method to get the token of a managed bot. Returns the token as String on success.
 * @method string replaceManagedBotToken(...$params) Use this method to revoke the current token of a managed bot and generate a new one. Returns the new token as String on success.
 * @method BotAccessSettings getManagedBotAccessSettings(...$params) Use this method to get the access settings of a managed bot. Returns a BotAccessSettings object on success.
 * @method bool setManagedBotAccessSettings(...$params) Use this method to change the access settings of a managed bot. Returns True on success.
 * @method bool setMyCommands(...$params) Use this method to change the list of the bot's commands. See this manual for more details about bot commands. Returns True on success.
 * @method bool deleteMyCommands(...$params) Use this method to delete the list of the bot's commands for the given scope and user language. After deletion, higher level commands will be shown to affected users. Returns True on success.
 * @method BotCommand[] getMyCommands(...$params) Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of BotCommand objects. If commands aren't set, an empty list is returned.
 * @method bool setMyName(...$params) Use this method to change the bot's name. Returns True on success.
 * @method BotName getMyName(...$params) Use this method to get the current bot name for the given user language. Returns BotName on success.
 * @method bool setMyDescription(...$params) Use this method to change the bot's description, which is shown in the chat with the bot if the chat is empty. Returns True on success.
 * @method BotDescription getMyDescription(...$params) Use this method to get the current bot description for the given user language. Returns BotDescription on success.
 * @method bool setMyShortDescription(...$params) Use this method to change the bot's short description, which is shown on the bot's profile page and is sent together with the link when users share the bot. Returns True on success.
 * @method BotShortDescription getMyShortDescription(...$params) Use this method to get the current bot short description for the given user language. Returns BotShortDescription on success.
 * @method bool setMyProfilePhoto(...$params) Changes the profile photo of the bot. Returns True on success.
 * @method bool removeMyProfilePhoto(...$params) Removes the profile photo of the bot. Requires no parameters. Returns True on success.
 * @method bool setChatMenuButton(...$params) Use this method to change the bot's menu button in a private chat, or the default menu button. Returns True on success.
 * @method MenuButton getChatMenuButton(...$params) Use this method to get the current value of the bot's menu button in a private chat, or the default menu button. Returns MenuButton on success.
 * @method bool setMyDefaultAdministratorRights(...$params) Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels. These rights will be suggested to users, but they are free to modify the list before adding the bot. Returns True on success.
 * @method ChatAdministratorRights getMyDefaultAdministratorRights(...$params) Use this method to get the current default administrator rights of the bot. Returns ChatAdministratorRights on success.
 * @method Gifts getAvailableGifts(...$params) Returns the list of gifts that can be sent by the bot to users and channel chats. Requires no parameters. Returns a Gifts object.
 * @method bool sendGift(...$params) Sends a gift to the given user or channel chat. The gift can't be converted to Telegram Stars by the receiver. Returns True on success.
 * @method bool giftPremiumSubscription(...$params) Gifts a Telegram Premium subscription to the given user. Returns True on success.
 * @method bool verifyUser(...$params) Verifies a user on behalf of the organization which is represented by the bot. Returns True on success.
 * @method bool verifyChat(...$params) Verifies a chat on behalf of the organization which is represented by the bot. Returns True on success.
 * @method bool removeUserVerification(...$params) Removes verification from a user who is currently verified on behalf of the organization represented by the bot. Returns True on success.
 * @method bool removeChatVerification(...$params) Removes verification from a chat that is currently verified on behalf of the organization represented by the bot. Returns True on success.
 * @method bool readBusinessMessage(...$params) Marks incoming message as read on behalf of a business account. Requires the can_read_messages business bot right. Returns True on success.
 * @method bool deleteBusinessMessages(...$params) Delete messages on behalf of a business account. Requires the can_delete_sent_messages business bot right to delete messages sent by the bot itself, or the can_delete_all_messages business bot right to delete any message. Returns True on success.
 * @method bool setBusinessAccountName(...$params) Changes the first and last name of a managed business account. Requires the can_change_name business bot right. Returns True on success.
 * @method bool setBusinessAccountUsername(...$params) Changes the username of a managed business account. Requires the can_change_username business bot right. Returns True on success.
 * @method bool setBusinessAccountBio(...$params) Changes the bio of a managed business account. Requires the can_change_bio business bot right. Returns True on success.
 * @method bool setBusinessAccountProfilePhoto(...$params) Changes the profile photo of a managed business account. Requires the can_edit_profile_photo business bot right. Returns True on success.
 * @method bool removeBusinessAccountProfilePhoto(...$params) Removes the current profile photo of a managed business account. Requires the can_edit_profile_photo business bot right. Returns True on success.
 * @method bool setBusinessAccountGiftSettings(...$params) Changes the privacy settings pertaining to incoming gifts in a managed business account. Requires the can_change_gift_settings business bot right. Returns True on success.
 * @method StarAmount getBusinessAccountStarBalance(...$params) Returns the amount of Telegram Stars owned by a managed business account. Requires the can_view_gifts_and_stars business bot right. Returns StarAmount on success.
 * @method bool transferBusinessAccountStars(...$params) Transfers Telegram Stars from the business account balance to the bot's balance. Requires the can_transfer_stars business bot right. Returns True on success.
 * @method OwnedGifts getBusinessAccountGifts(...$params) Returns the gifts received and owned by a managed business account. Requires the can_view_gifts_and_stars business bot right. Returns OwnedGifts on success.
 * @method OwnedGifts getUserGifts(...$params) Returns the gifts owned and hosted by a user. Returns OwnedGifts on success.
 * @method OwnedGifts getChatGifts(...$params) Returns the gifts owned by a chat. Returns OwnedGifts on success.
 * @method bool convertGiftToStars(...$params) Converts a given regular gift to Telegram Stars. Requires the can_convert_gifts_to_stars business bot right. Returns True on success.
 * @method bool upgradeGift(...$params) Upgrades a given regular gift to a unique gift. Requires the can_transfer_and_upgrade_gifts business bot right. Additionally requires the can_transfer_stars business bot right if the upgrade is paid. Returns True on success.
 * @method bool transferGift(...$params) Transfers an owned unique gift to another user. Requires the can_transfer_and_upgrade_gifts business bot right. Requires can_transfer_stars business bot right if the transfer is paid. Returns True on success.
 * @method Story postStory(...$params) Posts a story on behalf of a managed business account. Requires the can_manage_stories business bot right. Returns Story on success.
 * @method Story repostStory(...$params) Reposts a story on behalf of a business account from another business account. Both business accounts must be managed by the same bot, and the story on the source account must have been posted (or reposted) by the bot. Requires the can_manage_stories business bot right for both business accounts. Returns Story on success.
 * @method Story editStory(...$params) Edits a story previously posted by the bot on behalf of a managed business account. Requires the can_manage_stories business bot right. Returns Story on success.
 * @method bool deleteStory(...$params) Deletes a story previously posted by the bot on behalf of a managed business account. Requires the can_manage_stories business bot right. Returns True on success.
 * @method SentWebAppMessage answerWebAppQuery(...$params) Use this method to set the result of an interaction with a Web App and send a corresponding message on behalf of the user to the chat from which the query originated. On success, a SentWebAppMessage object is returned.
 * @method PreparedInlineMessage savePreparedInlineMessage(...$params) Stores a message that can be sent by a user of a Mini App. Returns a PreparedInlineMessage object.
 * @method PreparedKeyboardButton savePreparedKeyboardButton(...$params) Stores a keyboard button that can be used by a user within a Mini App. Returns a PreparedKeyboardButton object.
 * @method Message|bool editMessageText(...$params) Use this method to edit text, rich and game messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
 * @method Message|bool editMessageCaption(...$params) Use this method to edit captions of messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
 * @method Message|bool editMessageMedia(...$params) Use this method to edit animation, audio, document, live photo, photo, or video messages, or to replace a text or a rich message with a media. If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for document albums and to a photo, a live photo, or a video otherwise. When an inline message is edited, a new file can't be uploaded; use a previously uploaded file via its file_id or specify a URL. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
 * @method Message|bool editMessageLiveLocation(...$params) Use this method to edit live location messages. A location can be edited until its live_period expires or editing is explicitly disabled by a call to stopMessageLiveLocation. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 * @method Message|bool stopMessageLiveLocation(...$params) Use this method to stop updating a live location message before live_period expires. On success, if the message is not an inline message, the edited Message is returned, otherwise True is returned.
 * @method Message editMessageChecklist(...$params) Use this method to edit a checklist on behalf of a connected business account. On success, the edited Message is returned.
 * @method Message|bool editMessageReplyMarkup(...$params) Use this method to edit only the reply markup of messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within 48 hours from the time they were sent.
 * @method Poll stopPoll(...$params) Use this method to stop a poll which was sent by the bot. On success, the stopped Poll is returned.
 * @method bool editEphemeralMessageText(...$params) Use this method to edit an ephemeral text message. Note that it is not guaranteed that the user will receive the message edit event, especially if they are offline. On success, True is returned.
 * @method bool editEphemeralMessageMedia(...$params) Use this method to edit the media of an ephemeral message. Note that it is not guaranteed that the user will receive the message edit event, especially if they are offline. On success, True is returned.
 * @method bool editEphemeralMessageCaption(...$params) Use this method to edit the caption of an ephemeral message. Note that it is not guaranteed that the user will receive the message edit event, especially if they are offline. On success, True is returned.
 * @method bool editEphemeralMessageReplyMarkup(...$params) Use this method to edit only the reply markup of an ephemeral message. Note that it is not guaranteed that the user will receive the message edit event, especially if they are offline. On success, True is returned.
 * @method bool approveSuggestedPost(...$params) Use this method to approve a suggested post in a direct messages chat. The bot must have the 'can_post_messages' administrator right in the corresponding channel chat. Returns True on success.
 * @method bool declineSuggestedPost(...$params) Use this method to decline a suggested post in a direct messages chat. The bot must have the 'can_manage_direct_messages' administrator right in the corresponding channel chat. Returns True on success.
 * @method bool deleteMessage(...$params) Use this method to delete a message, including service messages, with the following limitations:- A message can only be deleted if it was sent less than 48 hours ago.- Service messages about a supergroup, channel, or forum topic creation can't be deleted.- A dice message in a private chat can only be deleted if it was sent more than 24 hours ago.- Bots can delete outgoing messages in private chats, groups, and supergroups.- Bots can delete incoming messages in private chats.- Bots granted can_post_messages permissions can delete outgoing messages in channels.- If the bot is an administrator of a group, it can delete any message there.- If the bot has can_delete_messages administrator right in a supergroup or a channel, it can delete any message there.- If the bot has can_manage_direct_messages administrator right in a channel, it can delete any message in the corresponding direct messages chat.Returns True on success.
 * @method bool deleteMessages(...$params) Use this method to delete multiple messages simultaneously. If some of the specified messages can't be found, they are skipped. Returns True on success.
 * @method bool deleteEphemeralMessage(...$params) Use this method to delete an ephemeral message. Note that it is not guaranteed that the user will receive the message deletion event, especially if they are offline. Returns True on success.
 * @method bool deleteMessageReaction(...$params) Use this method to remove a reaction from a message in a group or a supergroup chat. The bot must have the 'can_delete_messages' administrator right in the chat. Returns True on success.
 * @method bool deleteAllMessageReactions(...$params) Use this method to remove up to 10000 recent reactions in a group or a supergroup chat added by a given user or chat. The bot must have the 'can_delete_messages' administrator right in the chat. Returns True on success.
 * @method Message sendSticker(...$params) Use this method to send static .WEBP, animated .TGS, or video .WEBM stickers. On success, the sent Message is returned.
 * @method StickerSet getStickerSet(...$params) Use this method to get a sticker set. On success, a StickerSet object is returned.
 * @method Sticker[] getCustomEmojiStickers(...$params) Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of Sticker objects.
 * @method File uploadStickerFile(...$params) Use this method to upload a file with a sticker for later use in the createNewStickerSet, addStickerToSet, or replaceStickerInSet methods (the file can be used multiple times). Returns the uploaded File on success.
 * @method bool createNewStickerSet(...$params) Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created. Returns True on success.
 * @method bool addStickerToSet(...$params) Use this method to add a new sticker to a set created by the bot. Emoji sticker sets can have up to 200 stickers. Other sticker sets can have up to 120 stickers. Returns True on success.
 * @method bool setStickerPositionInSet(...$params) Use this method to move a sticker in a set created by the bot to a specific position. Returns True on success.
 * @method bool deleteStickerFromSet(...$params) Use this method to delete a sticker from a set created by the bot. Returns True on success.
 * @method bool replaceStickerInSet(...$params) Use this method to replace an existing sticker in a sticker set with a new one. The method is equivalent to calling deleteStickerFromSet, then addStickerToSet, then setStickerPositionInSet. Returns True on success.
 * @method bool setStickerEmojiList(...$params) Use this method to change the list of emoji assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns True on success.
 * @method bool setStickerKeywords(...$params) Use this method to change search keywords assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns True on success.
 * @method bool setStickerMaskPosition(...$params) Use this method to change the mask position of a mask sticker. The sticker must belong to a sticker set that was created by the bot. Returns True on success.
 * @method bool setStickerSetTitle(...$params) Use this method to set the title of a created sticker set. Returns True on success.
 * @method bool setStickerSetThumbnail(...$params) Use this method to set the thumbnail of a regular or mask sticker set. The format of the thumbnail file must match the format of the stickers in the set. Returns True on success.
 * @method bool setCustomEmojiStickerSetThumbnail(...$params) Use this method to set the thumbnail of a custom emoji sticker set. Returns True on success.
 * @method bool deleteStickerSet(...$params) Use this method to delete a sticker set that was created by the bot. Returns True on success.
 * @method Message sendRichMessage(...$params) Use this method to send rich messages. If the message contains a block with a media element, then the bot must have the right to send the media to the chat. On success, the sent Message is returned.
 * @method bool sendRichMessageDraft(...$params) Use this method to stream a partial rich message to a user while the message is being generated. Note that the streamed draft is ephemeral and acts as a temporary 30-second preview - once the output is finalized, you must call sendRichMessage with the complete message to persist it in the user's chat. Returns True on success.
 * @method bool answerInlineQuery(...$params) Use this method to send answers to an inline query. On success, True is returned.No more than 50 results per query are allowed.
 * @method Message sendInvoice(...$params) Use this method to send invoices. On success, the sent Message is returned.
 * @method string createInvoiceLink(...$params) Use this method to create a link for an invoice. Returns the created invoice link as String on success.
 * @method bool answerShippingQuery(...$params) If you sent an invoice requesting a shipping address and the parameter is_flexible was specified, the Bot API will send an Update with a shipping_query field to the bot. Use this method to reply to shipping queries. On success, True is returned.
 * @method bool answerPreCheckoutQuery(...$params) Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form of an Update with the field pre_checkout_query. Use this method to respond to such pre-checkout queries. On success, True is returned. Note: The Bot API must receive an answer within 10 seconds after the pre-checkout query was sent.
 * @method StarAmount getMyStarBalance(...$params) A method to get the current Telegram Stars balance of the bot. Requires no parameters. On success, returns a StarAmount object.
 * @method StarTransactions getStarTransactions(...$params) Returns the bot's Telegram Star transactions in chronological order. On success, returns a StarTransactions object.
 * @method bool refundStarPayment(...$params) Refunds a successful payment in Telegram Stars. Returns True on success.
 * @method bool editUserStarSubscription(...$params) Allows the bot to cancel or re-enable extension of a subscription paid in Telegram Stars. Returns True on success.
 * @method bool setPassportDataErrors(...$params) Informs a user that some of the Telegram Passport elements they provided contains errors. The user will not be able to re-submit their Passport to you until the errors are fixed (the contents of the field for which you returned the error must change). Returns True on success. Use this if the data submitted by the user doesn't satisfy the standards your service requires for any reason. For example, if a birthday date seems invalid, a submitted document is blurry, a scan shows evidence of tampering, etc. Supply some details in the error message to make sure the user knows how to correct the issues.
 * @method Message sendGame(...$params) Use this method to send a game. On success, the sent Message is returned.
 * @method Message|bool setGameScore(...$params) Use this method to set the score of the specified user in a game message. On success, if the message is not an inline message, the Message is returned, otherwise True is returned. Returns an error, if the new score is not greater than the user's current score in the chat and force is False.
 * @method GameHighScore[] getGameHighScores(...$params) Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. Returns an Array of GameHighScore objects.
 */
class Telegram
{
    private Browser $browser;

    private string $baseUri = 'https://api.telegram.org/';

    protected ?string $parseMode = null;

    protected ?string $signature = null;

    /** @var string[] */
    private array $uploadableFields = Constant::MEDIA_TYPES;

    private bool $async = false;

    public function __construct(protected string $token, array $browserConfig = [])
    {
        $this->browser = Browser::factory(array_merge([
            'base_uri' => $this->baseUri,
        ], $browserConfig));
    }

    public static function factory(string $token, array $browserConfig = []): self
    {
        return new self($token, $browserConfig);
    }

    /**
     * Enable/disable default async mode for Bot API method calls.
     * When enabled, methods return PromiseInterface unless overridden per-call.
     */
    public function async(bool $async = true): self
    {
        $this->async = $async;

        return $this;
    }

    public function isAsync(): bool
    {
        return $this->async;
    }

    public function setParseMode(?string $parseMode): self
    {
        $this->parseMode = $parseMode;

        return $this;
    }

    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    public function setBaseUri(string $baseUri): self
    {
        $this->baseUri = rtrim($baseUri, '/') . '/';
        $this->browser = $this->browser->withConfig([
            'base_uri' => $this->baseUri,
        ]);

        return $this;
    }

    public function getBaseUri(): string
    {
        return $this->baseUri;
    }

    public function getBrowser(): Browser
    {
        return $this->browser;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function fetchAsync(string $uri, array $fields = []): PromiseInterface
    {
        $fields = $this->prepareFields($fields);
        $multipart = $this->buildMultipart($fields);

        return $this->browser->requestAsync(
            'POST',
            sprintf('/bot%s/%s', $this->getToken(), ltrim($uri, '/')),
            ['multipart' => $multipart]
        )->then(
            function (ResponseInterface $response) {
                $payload = json_decode($response->getBody()->getContents(), true);

                if (! is_array($payload)) {
                    return new Error([
                        'ok' => false,
                        'error_code' => $response->getStatusCode(),
                        'description' => 'Invalid JSON response from Telegram API',
                    ]);
                }

                if (! empty($payload['ok'])) {
                    return $payload['result'];
                }

                return new Error($payload);
            },
            function (Throwable $exception) {
                return new Error([
                    'ok' => false,
                    'error_code' => $exception->getCode(),
                    'description' => $exception->getMessage(),
                ]);
            }
        );
    }

    public function __call(string $name, array $arguments = []): mixed
    {
        $class = '\\Jeely\\Api\\Methods\\' . str_replace('_', '', ucwords($name, '_'));

        if (! class_exists($class)) {
            throw new \BadMethodCallException(sprintf('Telegram method [%s] is not defined.', $name));
        }

        if (isset($arguments[0]) && is_array($arguments[0])) {
            $arguments = array_merge(array_shift($arguments), $arguments);
        }

        return $this(new $class($arguments));
    }

    public function __invoke(MethodDefinitionInterface $method): mixed
    {
        return $method($this);
    }

    private function prepareFields(array $fields): array
    {
        if (! array_key_exists('parse_mode', $fields)) {
            $fields['parse_mode'] = $this->parseMode;
        }

        if (isset($fields['buttons']) && ! isset($fields['reply_markup'])) {
            $fields['reply_markup'] = $fields['buttons'];
            unset($fields['buttons']);
        }

        $files = [];
        $keyboardMeta = [
            'is_inline' => null,
            'resize_keyboard' => false,
            'one_time_keyboard' => false,
            'selective' => false,
            'is_persistent' => false,
        ];

        $appendSignature = ! empty($this->signature) && ! isset($fields['sign']);

        array_walk_recursive($fields, function (&$value, $attribute) use (&$files, &$keyboardMeta, $fields, $appendSignature) {
            if ($value instanceof KeyboardButtonInterface) {
                $this->collectKeyboardMeta($value, $keyboardMeta);
            }

            if ($value instanceof Nectar) {
                $value->withTelegram($this);
            }

            if (
                is_string($value)
                && @is_file($value)
                && @filesize($value) > 0
                && in_array(strtolower((string) $attribute), $this->uploadableFields, true)
            ) {
                $name = basename($value);
                $files[$name] = $value;
                $value = 'attach://' . $name;
            }

            if ($appendSignature && in_array((string) $attribute, ['text', 'caption', 'message_text'], true)) {
                $value .= "\n" . $this->formatSignature((string) ($fields['parse_mode'] ?? ''));
            }
        });

        foreach (['chat_id', 'user_id'] as $recipient) {
            if (isset($fields[$recipient]) && is_string($fields[$recipient]) && strtolower($fields[$recipient]) === 'me') {
                $fields[$recipient] = $this->botId();
            }
        }

        if (isset($fields['reply_markup'])) {
            $fields['reply_markup'] = $this->normalizeReplyMarkup($fields['reply_markup'], $keyboardMeta);
        }

        if (array_key_exists('parse_mode', $fields) && $fields['parse_mode'] === null) {
            unset($fields['parse_mode']);
        }

        $fields['__files'] = $files;

        return $fields;
    }

    private function buildMultipart(array $fields): array
    {
        $files = $fields['__files'] ?? [];
        unset($fields['__files']);

        $multipart = [];

        foreach ($files as $fileName => $path) {
            $multipart[] = [
                'name' => $fileName,
                'contents' => Utils::tryFopen($path, 'r'),
                'filename' => $fileName,
            ];
        }

        foreach ($fields as $fieldName => $content) {
            if ($content === null) {
                continue;
            }

            $multipart[] = [
                'name' => $fieldName,
                'contents' => $this->encodeField($content),
            ];
        }

        if ($multipart === []) {
            $multipart[] = [
                'name' => '_',
                'contents' => '1',
            ];
        }

        return $multipart;
    }

    private function encodeField(mixed $contents): string
    {
        if ($contents instanceof Nectar) {
            $contents = $contents->toArray();
        }

        if (is_array($contents)) {
            $contents = $this->normalizeArrayTree($contents);

            return json_encode($contents, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }

        if (is_bool($contents)) {
            return $contents ? '1' : '0';
        }

        if (ValueUtils::isStringable($contents)) {
            return (string) $contents;
        }

        return (string) $contents;
    }

    private function normalizeArrayTree(array $items): array
    {
        foreach ($items as $key => $value) {
            if ($value instanceof Nectar) {
                $items[$key] = $value->toArray();
            } elseif (is_array($value)) {
                $items[$key] = $this->normalizeArrayTree($value);
            } elseif (ValueUtils::isStringable($value)) {
                $asString = (string) $value;
                $items[$key] = ValueUtils::isJson($asString) ? json_decode($asString) : $value;
            }
        }

        return $items;
    }

    private function collectKeyboardMeta(KeyboardButtonInterface $button, array &$meta): void
    {
        if ($meta['is_inline'] === null) {
            $meta['is_inline'] = $button instanceof InlineKeyboardButton;
        }

        if (! empty($button['resize']) || ! empty($button['resize_keyboard'])) {
            $meta['resize_keyboard'] = true;
        }
        if (! empty($button['one_time']) || ! empty($button['one_time_keyboard'])) {
            $meta['one_time_keyboard'] = true;
        }
        if (! empty($button['selective'])) {
            $meta['selective'] = true;
        }
        if (! empty($button['is_persistent'])) {
            $meta['is_persistent'] = true;
        }
    }

    private function normalizeReplyMarkup(mixed $replyMarkup, array $keyboardMeta): mixed
    {
        if (
            $replyMarkup instanceof InlineKeyboardMarkup
            || $replyMarkup instanceof ReplyKeyboardMarkup
            || $replyMarkup instanceof ReplyKeyboardRemove
            || $replyMarkup instanceof ForceReply
        ) {
            return $replyMarkup;
        }

        if ($replyMarkup instanceof KeyboardButtonInterface) {
            $replyMarkup = [[$replyMarkup]];
        } elseif (
            is_array($replyMarkup)
            && isset($replyMarkup[0])
            && $replyMarkup[0] instanceof KeyboardButtonInterface
        ) {
            $replyMarkup = [$replyMarkup];
        }

        if (! is_array($replyMarkup)) {
            return $replyMarkup;
        }

        if (isset($replyMarkup['inline_keyboard']) || isset($replyMarkup['keyboard'])) {
            return $replyMarkup;
        }

        $isInline = $keyboardMeta['is_inline'];
        if ($isInline === null) {
            $isInline = $this->detectInlineKeyboard($replyMarkup);
        }

        if ($isInline) {
            return ['inline_keyboard' => $replyMarkup];
        }

        return [
            'keyboard' => $replyMarkup,
            'resize_keyboard' => $keyboardMeta['resize_keyboard'] ?: true,
            'one_time_keyboard' => $keyboardMeta['one_time_keyboard'],
            'selective' => $keyboardMeta['selective'],
            'is_persistent' => $keyboardMeta['is_persistent'],
        ];
    }

    private function detectInlineKeyboard(array $rows): bool
    {
        foreach ($rows as $row) {
            if (! is_array($row)) {
                continue;
            }

            foreach ($row as $button) {
                if ($button instanceof InlineKeyboardButton) {
                    return true;
                }
                if ($button instanceof KeyboardButton) {
                    return false;
                }
            }
        }

        return false;
    }

    private function formatSignature(string $parseMode): string
    {
        return match (strtolower($parseMode)) {
            'markdown', 'markdownv2' => \escape_markdown((string) $this->signature),
            'html' => htmlspecialchars((string) $this->signature, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'),
            default => (string) $this->signature,
        };
    }

    private function botId(): int
    {
        return (int) explode(':', $this->token, 2)[0];
    }
}
