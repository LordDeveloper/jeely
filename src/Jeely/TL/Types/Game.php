<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class Game
 * @description This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 *
 * @method string getTitle() Title of the game
 * @method string getDescription() Description of the game
 * @method PhotoSize[] getPhoto() Photo that will be displayed in the game message in chats.
 * @method string getText() Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
 * @method MessageEntity[] getTextEntities() Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
 * @method Animation getAnimation() Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
 *
 * @method bool isTitle()
 * @method bool isDescription()
 * @method bool isPhoto()
 * @method bool isText()
 * @method bool isTextEntities()
 * @method bool isAnimation()
 *
 * @method $this setTitle()
 * @method $this setDescription()
 * @method $this setPhoto()
 * @method $this setText()
 * @method $this setTextEntities()
 * @method $this setAnimation()
 *
 * @method $this unsetTitle()
 * @method $this unsetDescription()
 * @method $this unsetPhoto()
 * @method $this unsetText()
 * @method $this unsetTextEntities()
 * @method $this unsetAnimation()
 *
 * @property string $title Title of the game
 * @property string $description Description of the game
 * @property PhotoSize[] $photo Photo that will be displayed in the game message in chats.
 * @property string $text Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
 * @property MessageEntity[] $text_entities Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
 * @property Animation $animation Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
 *
 * @see https://core.telegram.org/bots/api#game
 */
class Game extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
        'title' => 'string',
        'description' => 'string',
        'photo' => 'PhotoSize[]',
        'text' => 'string',
        'text_entities' => 'MessageEntity[]',
        'animation' => 'Animation',
    ];
}