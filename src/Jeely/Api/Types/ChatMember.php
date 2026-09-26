<?php

namespace Jeely\Api\Types;

/**
 * @class ChatMember
 * @description This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:
 *
 * @see https://core.telegram.org/bots/api#chatmember
 *
 * Discriminated union resolved by {@see UNION_MAP} / {@see UNION_BY} in NectarHydrator.
 * Fallback map keeps `user` hydrated even when status is unknown.
 */
class ChatMember extends \Jeely\Nectar
{
    public const UNION_BY = 'status';

    /**
     * @var array<string, class-string<ChatMember>>
     */
    public const UNION_MAP = [
        'creator' => ChatMemberOwner::class,
        'administrator' => ChatMemberAdministrator::class,
        'member' => ChatMemberMember::class,
        'restricted' => ChatMemberRestricted::class,
        'left' => ChatMemberLeft::class,
        'kicked' => ChatMemberBanned::class,
    ];

    public const JSON_PROPERTY_MAP = [
        'status' => 'string',
        'user' => 'User',
    ];
}
