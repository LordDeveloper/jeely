<?php

namespace Jeely\Api\Types;

/**
 * @class RichTextBotCommand
 * @description A bot command.
 *
 * @method string getType() Type of the rich text, always “bot_command”
 * @method RichText getText() The text
 * @method string getBotCommand() The bot command
 *
 * @method bool isType()
 * @method bool isText()
 * @method bool isBotCommand()
 *
 * @method $this setType()
 * @method $this setText()
 * @method $this setBotCommand()
 *
 * @method $this unsetType()
 * @method $this unsetText()
 * @method $this unsetBotCommand()
 *
 * @property string $type Type of the rich text, always “bot_command”
 * @property RichText $text The text
 * @property string $bot_command The bot command
 *
 * @see https://core.telegram.org/bots/api#richtextbotcommand
 */
class RichTextBotCommand extends \Jeely\Nectar
{
    public const JSON_PROPERTY_MAP = [
        'type' => 'string',
        'text' => 'RichText',
        'bot_command' => 'string',
    ];
}
