<?php

namespace Jeely\Api\Types;

/**
 * @class SuggestedPostDeclined
 * @description Describes a service message about the rejection of a suggested post.
 *
 * @method Message getSuggestedPostMessage() Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @method string getComment() Optional. Comment with which the post was declined
 *
 * @method bool isSuggestedPostMessage()
 * @method bool isComment()
 *
 * @method $this setSuggestedPostMessage()
 * @method $this setComment()
 *
 * @method $this unsetSuggestedPostMessage()
 * @method $this unsetComment()
 *
 * @property Message $suggested_post_message Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @property string $comment Optional. Comment with which the post was declined
 *
 * @see https://core.telegram.org/bots/api#suggestedpostdeclined
 */
class SuggestedPostDeclined extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'suggested_post_message' => 'Message',
        'comment' => 'string',
    ];
}
