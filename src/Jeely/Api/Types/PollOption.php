<?php

namespace Jeely\Api\Types;

/**
 * @class PollOption
 * @description This object contains information about one answer option in a poll.
 *
 * @method string getPersistentId() Unique identifier of the option, persistent on option addition and deletion
 * @method string getText() Option text, 1-100 characters
 * @method MessageEntity[] getTextEntities() Optional. Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll option texts
 * @method PollMedia getMedia() Optional. Media added to the poll option
 * @method int getVoterCount() Number of users who voted for this option; may be 0 if unknown
 * @method User getAddedByUser() Optional. User who added the option; omitted if the option wasn't added by a user after poll creation
 * @method Chat getAddedByChat() Optional. Chat that added the option; omitted if the option wasn't added by a chat after poll creation
 * @method int getAdditionDate() Optional. Point in time (Unix timestamp) when the option was added; omitted if the option existed in the original poll
 *
 * @method bool isPersistentId()
 * @method bool isText()
 * @method bool isTextEntities()
 * @method bool isMedia()
 * @method bool isVoterCount()
 * @method bool isAddedByUser()
 * @method bool isAddedByChat()
 * @method bool isAdditionDate()
 *
 * @method $this setPersistentId()
 * @method $this setText()
 * @method $this setTextEntities()
 * @method $this setMedia()
 * @method $this setVoterCount()
 * @method $this setAddedByUser()
 * @method $this setAddedByChat()
 * @method $this setAdditionDate()
 *
 * @method $this unsetPersistentId()
 * @method $this unsetText()
 * @method $this unsetTextEntities()
 * @method $this unsetMedia()
 * @method $this unsetVoterCount()
 * @method $this unsetAddedByUser()
 * @method $this unsetAddedByChat()
 * @method $this unsetAdditionDate()
 *
 * @property string $persistent_id Unique identifier of the option, persistent on option addition and deletion
 * @property string $text Option text, 1-100 characters
 * @property MessageEntity[] $text_entities Optional. Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll option texts
 * @property PollMedia $media Optional. Media added to the poll option
 * @property int $voter_count Number of users who voted for this option; may be 0 if unknown
 * @property User $added_by_user Optional. User who added the option; omitted if the option wasn't added by a user after poll creation
 * @property Chat $added_by_chat Optional. Chat that added the option; omitted if the option wasn't added by a chat after poll creation
 * @property int $addition_date Optional. Point in time (Unix timestamp) when the option was added; omitted if the option existed in the original poll
 *
 * @see https://core.telegram.org/bots/api#polloption
 */
class PollOption extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'persistent_id' => 'string',
        'text' => 'string',
        'text_entities' => 'MessageEntity[]',
        'media' => 'PollMedia',
        'voter_count' => 'int',
        'added_by_user' => 'User',
        'added_by_chat' => 'Chat',
        'addition_date' => 'int',
    ];
}
