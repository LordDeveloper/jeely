<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;


/**
* @class Game
* @description This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
*
* @property	string $title Title of the game
* @method	string getTitle() Title of the game
* @method	bool isTitle()
* @method	$this setTitle()
* @method	$this unsetTitle()

* @property	string $description Description of the game
* @method	string getDescription() Description of the game
* @method	bool isDescription()
* @method	$this setDescription()
* @method	$this unsetDescription()

* @property	PhotoSize[] $photo Photo that will be displayed in the game message in chats.
* @method	PhotoSize[] getPhoto() Photo that will be displayed in the game message in chats.
* @method	bool isPhoto()
* @method	$this setPhoto()
* @method	$this unsetPhoto()

* @property	string $text Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
* @method	string getText() Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
* @method	bool isText()
* @method	$this setText()
* @method	$this unsetText()

* @property	MessageEntity[] $text_entities Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
* @method	MessageEntity[] getTextEntities() Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
* @method	bool isTextEntities()
* @method	$this setTextEntities()
* @method	$this unsetTextEntities()

* @property	Animation $animation Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
* @method	Animation getAnimation() Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
* @method	bool isAnimation()
* @method	$this setAnimation()
* @method	$this unsetAnimation()

*/

class Game extends TLObject
{
	const JSON_PROPERTY_MAP = [
		'title'=> 'string',
		'description'=> 'string',
		'photo'=> 'PhotoSize[]',
		'text'=> 'string',
		'text_entities'=> 'MessageEntity[]',
		'animation'=> 'Animation',
	];

}