<?php

namespace Jeely\Api\Types;

/**
 * @class Checklist
 * @description Describes a checklist.
 *
 * @method string getTitle() Title of the checklist
 * @method MessageEntity[] getTitleEntities() Optional. Special entities that appear in the checklist title
 * @method ChecklistTask[] getTasks() List of tasks in the checklist
 * @method bool getOthersCanAddTasks() Optional. True, if users other than the creator of the list can add tasks to the list
 * @method bool getOthersCanMarkTasksAsDone() Optional. True, if users other than the creator of the list can mark tasks as done or not done
 *
 * @method bool isTitle()
 * @method bool isTitleEntities()
 * @method bool isTasks()
 * @method bool isOthersCanAddTasks()
 * @method bool isOthersCanMarkTasksAsDone()
 *
 * @method $this setTitle()
 * @method $this setTitleEntities()
 * @method $this setTasks()
 * @method $this setOthersCanAddTasks()
 * @method $this setOthersCanMarkTasksAsDone()
 *
 * @method $this unsetTitle()
 * @method $this unsetTitleEntities()
 * @method $this unsetTasks()
 * @method $this unsetOthersCanAddTasks()
 * @method $this unsetOthersCanMarkTasksAsDone()
 *
 * @property string $title Title of the checklist
 * @property MessageEntity[] $title_entities Optional. Special entities that appear in the checklist title
 * @property ChecklistTask[] $tasks List of tasks in the checklist
 * @property bool $others_can_add_tasks Optional. True, if users other than the creator of the list can add tasks to the list
 * @property bool $others_can_mark_tasks_as_done Optional. True, if users other than the creator of the list can mark tasks as done or not done
 *
 * @see https://core.telegram.org/bots/api#checklist
 */
class Checklist extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'title' => 'string',
        'title_entities' => 'MessageEntity[]',
        'tasks' => 'ChecklistTask[]',
        'others_can_add_tasks' => 'bool',
        'others_can_mark_tasks_as_done' => 'bool',
    ];
}
