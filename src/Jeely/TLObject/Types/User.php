<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class User
* @description This object represents a Telegram user or bot.
*
* @property	int $id Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
* @method	int getId() Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
* @method	bool isId()
* @method	$this setId()
* @method	$this unsetId()

* @property	bool $is_bot True, if this user is a bot
* @method	bool getIsBot() True, if this user is a bot
* @method	bool isIsBot()
* @method	$this setIsBot()
* @method	$this unsetIsBot()

* @property	string $first_name User's or bot's first name
* @method	string getFirstName() User's or bot's first name
* @method	bool isFirstName()
* @method	$this setFirstName()
* @method	$this unsetFirstName()

* @property	string $last_name Optional. User's or bot's last name
* @method	string getLastName() Optional. User's or bot's last name
* @method	bool isLastName()
* @method	$this setLastName()
* @method	$this unsetLastName()

* @property	string $username Optional. User's or bot's username
* @method	string getUsername() Optional. User's or bot's username
* @method	bool isUsername()
* @method	$this setUsername()
* @method	$this unsetUsername()

* @property	string $language_code Optional. IETF language tag of the user's language
* @method	string getLanguageCode() Optional. IETF language tag of the user's language
* @method	bool isLanguageCode()
* @method	$this setLanguageCode()
* @method	$this unsetLanguageCode()

* @property	bool $is_premium Optional. True, if this user is a Telegram Premium user
* @method	bool getIsPremium() Optional. True, if this user is a Telegram Premium user
* @method	bool isIsPremium()
* @method	$this setIsPremium()
* @method	$this unsetIsPremium()

* @property	bool $added_to_attachment_menu Optional. True, if this user added the bot to the attachment menu
* @method	bool getAddedToAttachmentMenu() Optional. True, if this user added the bot to the attachment menu
* @method	bool isAddedToAttachmentMenu()
* @method	$this setAddedToAttachmentMenu()
* @method	$this unsetAddedToAttachmentMenu()

* @property	bool $can_join_groups Optional. True, if the bot can be invited to groups. Returned only in getMe.
* @method	bool getCanJoinGroups() Optional. True, if the bot can be invited to groups. Returned only in getMe.
* @method	bool isCanJoinGroups()
* @method	$this setCanJoinGroups()
* @method	$this unsetCanJoinGroups()

* @property	bool $can_read_all_group_messages Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
* @method	bool getCanReadAllGroupMessages() Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
* @method	bool isCanReadAllGroupMessages()
* @method	$this setCanReadAllGroupMessages()
* @method	$this unsetCanReadAllGroupMessages()

* @property	bool $supports_inline_queries Optional. True, if the bot supports inline queries. Returned only in getMe.
* @method	bool getSupportsInlineQueries() Optional. True, if the bot supports inline queries. Returned only in getMe.
* @method	bool isSupportsInlineQueries()
* @method	$this setSupportsInlineQueries()
* @method	$this unsetSupportsInlineQueries()

* @property	bool $can_connect_to_business Optional. True, if the bot can be connected to a Telegram Business account to receive its messages. Returned only in getMe.
* @method	bool getCanConnectToBusiness() Optional. True, if the bot can be connected to a Telegram Business account to receive its messages. Returned only in getMe.
* @method	bool isCanConnectToBusiness()
* @method	$this setCanConnectToBusiness()
* @method	$this unsetCanConnectToBusiness()

* @property	bool $has_main_web_app Optional. True, if the bot has a main Web App. Returned only in getMe.
* @method	bool getHasMainWebApp() Optional. True, if the bot has a main Web App. Returned only in getMe.
* @method	bool isHasMainWebApp()
* @method	$this setHasMainWebApp()
* @method	$this unsetHasMainWebApp()

*/

class User extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'id'=> 'int',
		'is_bot'=> 'bool',
		'first_name'=> 'string',
		'last_name'=> 'string',
		'username'=> 'string',
		'language_code'=> 'string',
		'is_premium'=> 'bool',
		'added_to_attachment_menu'=> 'bool',
		'can_join_groups'=> 'bool',
		'can_read_all_group_messages'=> 'bool',
		'supports_inline_queries'=> 'bool',
		'can_connect_to_business'=> 'bool',
		'has_main_web_app'=> 'bool',
	];

}