<?php

namespace Jeely\Api\Types;

/**
 * @class BotCommand
 * @description This object represents a bot command.
 *
 * @method string getCommand() Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
 * @method string getDescription() Description of the command; 1-256 characters
 * @method bool getIsEphemeral() Optional. True, if the command sends an ephemeral message, which can be seen only by the sender of the message and the bot
 *
 * @method bool isCommand()
 * @method bool isDescription()
 * @method bool isIsEphemeral()
 *
 * @method $this setCommand()
 * @method $this setDescription()
 * @method $this setIsEphemeral()
 *
 * @method $this unsetCommand()
 * @method $this unsetDescription()
 * @method $this unsetIsEphemeral()
 *
 * @property string $command Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
 * @property string $description Description of the command; 1-256 characters
 * @property bool $is_ephemeral Optional. True, if the command sends an ephemeral message, which can be seen only by the sender of the message and the bot
 *
 * @see https://core.telegram.org/bots/api#botcommand
 */
class BotCommand extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'command' => 'string',
        'description' => 'string',
        'is_ephemeral' => 'bool',
    ];
}
