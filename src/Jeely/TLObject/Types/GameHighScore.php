<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class GameHighScore
* @description This object represents one row of the high scores table for a game.
*
* @property	int $position Position in high score table for the game
* @method	int getPosition() Position in high score table for the game
* @method	bool isPosition()
* @method	$this setPosition()
* @method	$this unsetPosition()

* @property	User $user User
* @method	User getUser() User
* @method	bool isUser()
* @method	$this setUser()
* @method	$this unsetUser()

* @property	int $score Score
* @method	int getScore() Score
* @method	bool isScore()
* @method	$this setScore()
* @method	$this unsetScore()

*/

class GameHighScore extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'position'=> 'int',
		'user'=> 'User',
		'score'=> 'int',
	];

}