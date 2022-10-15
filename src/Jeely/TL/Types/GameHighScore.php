<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class GameHighScore
 * @description This object represents one row of the high scores table for a game.
 *
 * @method int getPosition() Position in high score table for the game
 * @method User getUser() User
 * @method int getScore() Score
 *
 * @method bool isPosition()
 * @method bool isUser()
 * @method bool isScore()
 *
 * @method $this setPosition()
 * @method $this setUser()
 * @method $this setScore()
 *
 * @method $this unsetPosition()
 * @method $this unsetUser()
 * @method $this unsetScore()
 *
 * @property int $position Position in high score table for the game
 * @property User $user User
 * @property int $score Score
 *
 * @see https://core.telegram.org/bots/api#gamehighscore
 */
class GameHighScore extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'position' => 'int',
        'user' => 'User',
        'score' => 'int',
    ];
}