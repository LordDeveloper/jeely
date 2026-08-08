<?php

namespace Jeely\Api\Types;

/**
 * @class InputChecklist
 * @description Describes a checklist to create.
 *
 * @method string getTitle() Title of the checklist; 1-255 characters after entities parsing
 * @method string getParseMode() Optional. Mode for parsing entities in the title. See formatting options for more details.
 * @method MessageEntity[] getTitleEntities() Optional. List of special entities that appear in the title, which can be specified instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities are allowed.
 * @method InputChecklistTask[] getTasks() List of 1-30 tasks in the checklist
 * @method bool getOthersCanAddTasks() Optional. Pass True if other users can add tasks to the checklist
 * @method bool getOthersCanMarkTasksAsDone() Optional. Pass True if other users can mark tasks as done or not done in the checklist
 *
 * @method bool isTitle()
 * @method bool isParseMode()
 * @method bool isTitleEntities()
 * @method bool isTasks()
 * @method bool isOthersCanAddTasks()
 * @method bool isOthersCanMarkTasksAsDone()
 *
 * @method $this setTitle()
 * @method $this setParseMode()
 * @method $this setTitleEntities()
 * @method $this setTasks()
 * @method $this setOthersCanAddTasks()
 * @method $this setOthersCanMarkTasksAsDone()
 *
 * @method $this unsetTitle()
 * @method $this unsetParseMode()
 * @method $this unsetTitleEntities()
 * @method $this unsetTasks()
 * @method $this unsetOthersCanAddTasks()
 * @method $this unsetOthersCanMarkTasksAsDone()
 *
 * @property string $title Title of the checklist; 1-255 characters after entities parsing
 * @property string $parse_mode Optional. Mode for parsing entities in the title. See formatting options for more details.
 * @property MessageEntity[] $title_entities Optional. List of special entities that appear in the title, which can be specified instead of parse_mode. Currently, only bold, italic, underline, strikethrough, spoiler, custom_emoji, and date_time entities are allowed.
 * @property InputChecklistTask[] $tasks List of 1-30 tasks in the checklist
 * @property bool $others_can_add_tasks Optional. Pass True if other users can add tasks to the checklist
 * @property bool $others_can_mark_tasks_as_done Optional. Pass True if other users can mark tasks as done or not done in the checklist
 *
 * @see https://core.telegram.org/bots/api#inputchecklist
 */
class InputChecklist extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'title' => 'string',
        'parse_mode' => 'string',
        'title_entities' => 'MessageEntity[]',
        'tasks' => 'InputChecklistTask[]',
        'others_can_add_tasks' => 'bool',
        'others_can_mark_tasks_as_done' => 'bool',
    ];
}
