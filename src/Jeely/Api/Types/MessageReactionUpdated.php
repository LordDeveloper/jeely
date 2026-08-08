<?php

namespace Jeely\Api\Types;

use Jeely\Mixins\InteractsWithMessageReaction;

/**
 * @class MessageReactionUpdated
 * @description This object represents a change of a reaction on a message performed by a user.
 *
 * @method Chat getChat() The chat containing the message the user reacted to
 * @method int getMessageId() Unique identifier of the message inside the chat
 * @method User getUser() Optional. The user that changed the reaction, if the user isn't anonymous
 * @method Chat getActorChat() Optional. The chat on behalf of which the reaction was changed, if the user is anonymous
 * @method int getDate() Date of the change in Unix time
 * @method ReactionType[] getOldReaction() Previous list of reaction types that were set by the user
 * @method ReactionType[] getNewReaction() New list of reaction types that have been set by the user
 *
 * @method bool isChat()
 * @method bool isMessageId()
 * @method bool isUser()
 * @method bool isActorChat()
 * @method bool isDate()
 * @method bool isOldReaction()
 * @method bool isNewReaction()
 *
 * @method $this setChat()
 * @method $this setMessageId()
 * @method $this setUser()
 * @method $this setActorChat()
 * @method $this setDate()
 * @method $this setOldReaction()
 * @method $this setNewReaction()
 *
 * @method $this unsetChat()
 * @method $this unsetMessageId()
 * @method $this unsetUser()
 * @method $this unsetActorChat()
 * @method $this unsetDate()
 * @method $this unsetOldReaction()
 * @method $this unsetNewReaction()
 *
 * @property Chat $chat The chat containing the message the user reacted to
 * @property int $message_id Unique identifier of the message inside the chat
 * @property User $user Optional. The user that changed the reaction, if the user isn't anonymous
 * @property Chat $actor_chat Optional. The chat on behalf of which the reaction was changed, if the user is anonymous
 * @property int $date Date of the change in Unix time
 * @property ReactionType[] $old_reaction Previous list of reaction types that were set by the user
 * @property ReactionType[] $new_reaction New list of reaction types that have been set by the user
 *
 * @see https://core.telegram.org/bots/api#messagereactionupdated
 */
class MessageReactionUpdated extends \Jeely\Nectar
{
    use InteractsWithMessageReaction;

    public const JSON_PROPERTY_MAP = [
        'chat' => 'Chat',
        'message_id' => 'int',
        'user' => 'User',
        'actor_chat' => 'Chat',
        'date' => 'int',
        'old_reaction' => 'ReactionType[]',
        'new_reaction' => 'ReactionType[]',
    ];
}
