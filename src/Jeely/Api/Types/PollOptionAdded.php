<?php

namespace Jeely\Api\Types;

/**
 * @class PollOptionAdded
 * @description Describes a service message about an option added to a poll.
 *
 * @method MaybeInaccessibleMessage getPollMessage() Optional. Message containing the poll to which the option was added, if known. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @method string getOptionPersistentId() Unique identifier of the added option
 * @method string getOptionText() Option text
 * @method MessageEntity[] getOptionTextEntities() Optional. Special entities that appear in the option_text
 *
 * @method bool isPollMessage()
 * @method bool isOptionPersistentId()
 * @method bool isOptionText()
 * @method bool isOptionTextEntities()
 *
 * @method $this setPollMessage()
 * @method $this setOptionPersistentId()
 * @method $this setOptionText()
 * @method $this setOptionTextEntities()
 *
 * @method $this unsetPollMessage()
 * @method $this unsetOptionPersistentId()
 * @method $this unsetOptionText()
 * @method $this unsetOptionTextEntities()
 *
 * @property MaybeInaccessibleMessage $poll_message Optional. Message containing the poll to which the option was added, if known. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @property string $option_persistent_id Unique identifier of the added option
 * @property string $option_text Option text
 * @property MessageEntity[] $option_text_entities Optional. Special entities that appear in the option_text
 *
 * @see https://core.telegram.org/bots/api#polloptionadded
 */
class PollOptionAdded extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'poll_message' => 'MaybeInaccessibleMessage',
        'option_persistent_id' => 'string',
        'option_text' => 'string',
        'option_text_entities' => 'MessageEntity[]',
    ];
}
