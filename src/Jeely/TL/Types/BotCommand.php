<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class BotCommand
 * @description This object represents a bot command.
 *
 * @method string getCommand() Text of the command;
1-32 characters. Can contain only lowercase English letters, digits and underscores.
 * @method string getDescription() Description of the command;
1-256 characters.
 *
 * @method bool isCommand()
 * @method bool isDescription()
 *
 * @method $this setCommand()
 * @method $this setDescription()
 *
 * @method $this unsetCommand()
 * @method $this unsetDescription()
 *
 * @property string $command Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
 * @property string $description Description of the command; 1-256 characters.
 *
 * @see https://core.telegram.org/bots/api#botcommand
 */
class BotCommand extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'command' => 'string',
        'description' => 'string',
    ];
}