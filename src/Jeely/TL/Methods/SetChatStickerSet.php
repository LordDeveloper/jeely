<?php

namespace Jeely\TL\Methods;


/**
 * @class SetChatStickerSet
 * @description Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
 *
 * @property int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 * @property string $sticker_set_name Name of the sticker set to be set as the group sticker set
 * 
 * @see https://api.telegram.org/bots/api#setchatstickerset
 */
class SetChatStickerSet  extends MethodDefinition implements MethodDefinitionInterface
{
	public string $castsTo = 'bool';

	/**
 	* @var int|string $chat_id Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
 	*/
	public int|string $chat_id;

	/**
 	* @var string $sticker_set_name Name of the sticker set to be set as the group sticker set
 	*/
	public string $sticker_set_name;

	/**
	 * @var array $vars The value that are taken in the constructor method as method parameters.
	 */
	public function __construct(public array $vars = [])
	{}

	/**
	 * @return bool
	 */
	public function __invoke()
	{
		return $this->call();
	}
}