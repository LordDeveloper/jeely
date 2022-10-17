<?php

namespace Jeely\TL\Methods;

use Jeely\Telegram;
use Jeely\TL\Types\GameHighScore;

/**
 * @class GetGameHighScores
 * @description Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. Returns an Array of GameHighScore objects.
 *
 * @property int $user_id Target user id
 * @property int $chat_id Required if inline_message_id is not specified. Unique identifier for the target chat
 * @property int $message_id Required if inline_message_id is not specified. Identifier of the sent message
 * @property string $inline_message_id Required if chat_id and message_id are not specified. Identifier of the inline message
 *
 *
 * @see https://api.telegram.org/bots/api#getgamehighscores
 */
class GetGameHighScores extends MethodDefinition implements MethodDefinitionInterface
{
    protected string $castsTo = 'GameHighScore[]';

    /**
     * @var mixed $params The value that are taken in the constructor method as method parameters.
     */
    public function __construct(...$params)
    {
        $this->params = $params;
    }

    /**
     * @return GameHighScore[]
     */
    public function __invoke(Telegram $telegram)
    {
        return $this->call($telegram);
    }
}