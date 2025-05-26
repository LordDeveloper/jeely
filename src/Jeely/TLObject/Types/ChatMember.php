<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\ChatMemberOwner;
use Jeely\TLObject\Types\ChatMemberAdministrator;
use Jeely\TLObject\Types\ChatMemberMember;
use Jeely\TLObject\Types\ChatMemberRestricted;
use Jeely\TLObject\Types\ChatMemberLeft;
use Jeely\TLObject\Types\ChatMemberBanned;


/**
* @class ChatMember
* @description This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:
*
*/

class ChatMember extends TLObject
{
	const JSON_PROPERTY_MAP = [
		ChatMemberOwner::class,
		ChatMemberAdministrator::class,
		ChatMemberMember::class,
		ChatMemberRestricted::class,
		ChatMemberLeft::class,
		ChatMemberBanned::class,
	];

}