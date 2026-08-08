<?php

namespace Jeely\Api\Types;

/**
 * @class ChecklistTask
 * @description Describes a task in a checklist.
 *
 * @method int getId() Unique identifier of the task
 * @method string getText() Text of the task
 * @method MessageEntity[] getTextEntities() Optional. Special entities that appear in the task text
 * @method User getCompletedByUser() Optional. User that completed the task; omitted if the task wasn't completed by a user
 * @method Chat getCompletedByChat() Optional. Chat that completed the task; omitted if the task wasn't completed by a chat
 * @method int getCompletionDate() Optional. Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't completed
 *
 * @method bool isId()
 * @method bool isText()
 * @method bool isTextEntities()
 * @method bool isCompletedByUser()
 * @method bool isCompletedByChat()
 * @method bool isCompletionDate()
 *
 * @method $this setId()
 * @method $this setText()
 * @method $this setTextEntities()
 * @method $this setCompletedByUser()
 * @method $this setCompletedByChat()
 * @method $this setCompletionDate()
 *
 * @method $this unsetId()
 * @method $this unsetText()
 * @method $this unsetTextEntities()
 * @method $this unsetCompletedByUser()
 * @method $this unsetCompletedByChat()
 * @method $this unsetCompletionDate()
 *
 * @property int $id Unique identifier of the task
 * @property string $text Text of the task
 * @property MessageEntity[] $text_entities Optional. Special entities that appear in the task text
 * @property User $completed_by_user Optional. User that completed the task; omitted if the task wasn't completed by a user
 * @property Chat $completed_by_chat Optional. Chat that completed the task; omitted if the task wasn't completed by a chat
 * @property int $completion_date Optional. Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't completed
 *
 * @see https://core.telegram.org/bots/api#checklisttask
 */
class ChecklistTask extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'id' => 'int',
        'text' => 'string',
        'text_entities' => 'MessageEntity[]',
        'completed_by_user' => 'User',
        'completed_by_chat' => 'Chat',
        'completion_date' => 'int',
    ];
}
