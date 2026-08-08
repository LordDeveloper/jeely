<?php

namespace Jeely\Api\Types;

/**
 * @class ChecklistTasksDone
 * @description Describes a service message about checklist tasks marked as done or not done.
 *
 * @method Message getChecklistMessage() Optional. Message containing the checklist whose tasks were marked as done or not done. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @method int[] getMarkedAsDoneTaskIds() Optional. Identifiers of the tasks that were marked as done
 * @method int[] getMarkedAsNotDoneTaskIds() Optional. Identifiers of the tasks that were marked as not done
 *
 * @method bool isChecklistMessage()
 * @method bool isMarkedAsDoneTaskIds()
 * @method bool isMarkedAsNotDoneTaskIds()
 *
 * @method $this setChecklistMessage()
 * @method $this setMarkedAsDoneTaskIds()
 * @method $this setMarkedAsNotDoneTaskIds()
 *
 * @method $this unsetChecklistMessage()
 * @method $this unsetMarkedAsDoneTaskIds()
 * @method $this unsetMarkedAsNotDoneTaskIds()
 *
 * @property Message $checklist_message Optional. Message containing the checklist whose tasks were marked as done or not done. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
 * @property int[] $marked_as_done_task_ids Optional. Identifiers of the tasks that were marked as done
 * @property int[] $marked_as_not_done_task_ids Optional. Identifiers of the tasks that were marked as not done
 *
 * @see https://core.telegram.org/bots/api#checklisttasksdone
 */
class ChecklistTasksDone extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'checklist_message' => 'Message',
        'marked_as_done_task_ids' => 'int[]',
        'marked_as_not_done_task_ids' => 'int[]',
    ];
}
