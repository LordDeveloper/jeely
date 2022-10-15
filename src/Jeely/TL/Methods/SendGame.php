<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\InlineKeyboardMarkup;
use Jeely\TL\Types\Message;

/**
 * @class SendGame
 * @description Use this method to send a game. On success, the sent Message is returned.
 *
 * @property int $chat_id Unique identifier for the target chat
 * @property string $game_short_name Short name of the game, serves as the unique identifier for the game. Set up your games via @BotFather.
 * @property bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
 * @property bool $protect_content Protects the contents of the sent message from forwarding and saving
 * @property int $reply_to_message_id If the message is a reply, ID of the original message
 * @property bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
 * @property InlineKeyboardMarkup $reply_markup A JSON-serialized object for an inline keyboard. If empty, one 'Play game_title' button will be shown. If not empty, the first button must launch the game.
 *
 * @see https://api.telegram.org/bots/api#sendgame
 */
class SendGame extends MethodDefinition implements MethodDefinitionInterface
{
    public string $castsTo = 'Message';

    /**
     * @var int $chat_id Unique identifier for the target chat
     */
    public int $chat_id;

    /**
     * @var string $game_short_name Short name of the game, serves as the unique identifier for the game. Set up your games via @BotFather.
     */
    public string $game_short_name;

    /**
     * @var mixed $reply_markup A JSON-serialized object for an inline keyboard. If empty, one 'Play game_title' button will be shown. If not empty, the first button must launch the game.
     */
    public mixed $reply_markup = null;

    /**
     * @var ?bool $allow_sending_without_reply Pass True if the message should be sent even if the specified replied-to message is not found
     */
    public ?bool $allow_sending_without_reply = null;

    /**
     * @var int $reply_to_message_id If the message is a reply, ID of the original message
     */
    public int $reply_to_message_id = 0;

    /**
     * @var ?bool $protect_content Protects the contents of the sent message from forwarding and saving
     */
    public ?bool $protect_content = null;

    /**
     * @var ?bool $disable_notification Sends the message silently. Users will receive a notification with no sound.
     */
    public ?bool $disable_notification = null;

    /**
     * @var array $vars The value that are taken in the constructor method as method parameters.
     */
    public function __construct(public array $vars = [])
    {
    }

    /**
     * @return Message
     */
    public function __invoke()
    {
        return $this->call();
    }
}