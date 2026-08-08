<?php

namespace Jeely\Api\Types;

use Jeely\Mixins\InteractsWithUser;

/**
 * @class User
 * @description This object represents a Telegram user or bot.
 *
 * @method int getId() Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @method bool getIsBot() True, if this user is a bot
 * @method string getFirstName() User's or bot's first name
 * @method string getLastName() Optional. User's or bot's last name
 * @method string getUsername() Optional. User's or bot's username
 * @method string getLanguageCode() Optional. IETF language tag of the user's language
 * @method bool getIsPremium() Optional. True, if this user is a Telegram Premium user
 * @method bool getAddedToAttachmentMenu() Optional. True, if this user added the bot to the attachment menu
 * @method bool getCanJoinGroups() Optional. True, if the bot can be invited to groups. Returned only in getMe.
 * @method bool getCanReadAllGroupMessages() Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
 * @method bool getSupportsGuestQueries() Optional. True, if the bot supports guest queries from chats it is not a member of. Returned only in getMe.
 * @method bool getSupportsInlineQueries() Optional. True, if the bot supports inline queries. Returned only in getMe.
 * @method bool getCanConnectToBusiness() Optional. True, if the bot can be connected to a user account to manage it. Returned only in getMe.
 * @method bool getHasMainWebApp() Optional. True, if the bot has a main Web App. Returned only in getMe.
 * @method bool getHasTopicsEnabled() Optional. True, if the bot has forum topic mode enabled in private chats. Returned only in getMe.
 * @method bool getAllowsUsersToCreateTopics() Optional. True, if the bot allows users to create and delete topics in private chats. Returned only in getMe.
 * @method bool getCanManageBots() Optional. True, if other bots can be created to be controlled by the bot. Returned only in getMe.
 * @method bool getSupportsJoinRequestQueries() Optional. True, if the bot supports join request queries and can be assigned to process them. Returned only in getMe.
 *
 * @method bool isId()
 * @method bool isIsBot()
 * @method bool isFirstName()
 * @method bool isLastName()
 * @method bool isUsername()
 * @method bool isLanguageCode()
 * @method bool isIsPremium()
 * @method bool isAddedToAttachmentMenu()
 * @method bool isCanJoinGroups()
 * @method bool isCanReadAllGroupMessages()
 * @method bool isSupportsGuestQueries()
 * @method bool isSupportsInlineQueries()
 * @method bool isCanConnectToBusiness()
 * @method bool isHasMainWebApp()
 * @method bool isHasTopicsEnabled()
 * @method bool isAllowsUsersToCreateTopics()
 * @method bool isCanManageBots()
 * @method bool isSupportsJoinRequestQueries()
 *
 * @method $this setId()
 * @method $this setIsBot()
 * @method $this setFirstName()
 * @method $this setLastName()
 * @method $this setUsername()
 * @method $this setLanguageCode()
 * @method $this setIsPremium()
 * @method $this setAddedToAttachmentMenu()
 * @method $this setCanJoinGroups()
 * @method $this setCanReadAllGroupMessages()
 * @method $this setSupportsGuestQueries()
 * @method $this setSupportsInlineQueries()
 * @method $this setCanConnectToBusiness()
 * @method $this setHasMainWebApp()
 * @method $this setHasTopicsEnabled()
 * @method $this setAllowsUsersToCreateTopics()
 * @method $this setCanManageBots()
 * @method $this setSupportsJoinRequestQueries()
 *
 * @method $this unsetId()
 * @method $this unsetIsBot()
 * @method $this unsetFirstName()
 * @method $this unsetLastName()
 * @method $this unsetUsername()
 * @method $this unsetLanguageCode()
 * @method $this unsetIsPremium()
 * @method $this unsetAddedToAttachmentMenu()
 * @method $this unsetCanJoinGroups()
 * @method $this unsetCanReadAllGroupMessages()
 * @method $this unsetSupportsGuestQueries()
 * @method $this unsetSupportsInlineQueries()
 * @method $this unsetCanConnectToBusiness()
 * @method $this unsetHasMainWebApp()
 * @method $this unsetHasTopicsEnabled()
 * @method $this unsetAllowsUsersToCreateTopics()
 * @method $this unsetCanManageBots()
 * @method $this unsetSupportsJoinRequestQueries()
 *
 * @property int $id Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
 * @property bool $is_bot True, if this user is a bot
 * @property string $first_name User's or bot's first name
 * @property string $last_name Optional. User's or bot's last name
 * @property string $username Optional. User's or bot's username
 * @property string $language_code Optional. IETF language tag of the user's language
 * @property bool $is_premium Optional. True, if this user is a Telegram Premium user
 * @property bool $added_to_attachment_menu Optional. True, if this user added the bot to the attachment menu
 * @property bool $can_join_groups Optional. True, if the bot can be invited to groups. Returned only in getMe.
 * @property bool $can_read_all_group_messages Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
 * @property bool $supports_guest_queries Optional. True, if the bot supports guest queries from chats it is not a member of. Returned only in getMe.
 * @property bool $supports_inline_queries Optional. True, if the bot supports inline queries. Returned only in getMe.
 * @property bool $can_connect_to_business Optional. True, if the bot can be connected to a user account to manage it. Returned only in getMe.
 * @property bool $has_main_web_app Optional. True, if the bot has a main Web App. Returned only in getMe.
 * @property bool $has_topics_enabled Optional. True, if the bot has forum topic mode enabled in private chats. Returned only in getMe.
 * @property bool $allows_users_to_create_topics Optional. True, if the bot allows users to create and delete topics in private chats. Returned only in getMe.
 * @property bool $can_manage_bots Optional. True, if other bots can be created to be controlled by the bot. Returned only in getMe.
 * @property bool $supports_join_request_queries Optional. True, if the bot supports join request queries and can be assigned to process them. Returned only in getMe.
 *
 * @see https://core.telegram.org/bots/api#user
 */
class User extends \Jeely\Nectar
{
    use InteractsWithUser;

    public const JSON_PROPERTY_MAP = [
        'id' => 'int',
        'is_bot' => 'bool',
        'first_name' => 'string',
        'last_name' => 'string',
        'username' => 'string',
        'language_code' => 'string',
        'is_premium' => 'bool',
        'added_to_attachment_menu' => 'bool',
        'can_join_groups' => 'bool',
        'can_read_all_group_messages' => 'bool',
        'supports_guest_queries' => 'bool',
        'supports_inline_queries' => 'bool',
        'can_connect_to_business' => 'bool',
        'has_main_web_app' => 'bool',
        'has_topics_enabled' => 'bool',
        'allows_users_to_create_topics' => 'bool',
        'can_manage_bots' => 'bool',
        'supports_join_request_queries' => 'bool',
    ];
}
