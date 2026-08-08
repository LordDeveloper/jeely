<?php

namespace Jeely\Api\Types;

/**
 * @class ChecklistTasksAdded
 * @description Describes a service message about tasks added to a checklist.
 *
 * @method Message getChecklistMessage() Optional. Message containing the checklist to which the tasks were added. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @method ChecklistTask[] getTasks() List of tasks added to the checklist
 *
 * @method bool isChecklistMessage()
 * @method bool isTasks()
 *
 * @method $this setChecklistMessage()
 * @method $this setTasks()
 *
 * @method $this unsetChecklistMessage()
 * @method $this unsetTasks()
 *
 * @property Message $checklist_message Optional. Message containing the checklist to which the tasks were added. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @property ChecklistTask[] $tasks List of tasks added to the checklist
 *
 * @see https://core.telegram.org/bots/api#checklisttasksadded
 */
class ChecklistTasksAdded extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'checklist_message' => 'Message',
        'tasks' => 'ChecklistTask[]',
    ];
}
