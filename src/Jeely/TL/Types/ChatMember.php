<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class ChatMember
 * @description This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:
 *
 * @mixin ChatMemberAdministrator
 * @mixin ChatMemberBanned
 * @mixin ChatMemberLeft
 * @mixin ChatMemberMember
 * @mixin ChatMemberOwner
 * @mixin ChatMemberRestricted
 * @mixin ChatMemberUpdated
 *
 * @see https://core.telegram.org/bots/api#chatmember
 */
class ChatMember extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        ChatMemberAdministrator::class,
        ChatMemberBanned::class,
        ChatMemberLeft::class,
        ChatMemberMember::class,
        ChatMemberOwner::class,
        ChatMemberRestricted::class,
        ChatMemberUpdated::class,
    ];
}