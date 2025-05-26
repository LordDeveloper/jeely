<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetUserEmojiStatus
* @description Changes the emoji status for a given user that previously allowed the bot to manage their emoji status via the Mini App method requestEmojiStatusAccess. Returns True on success.
*
*
* @param	int $user_id Unique identifier of the target user
* @param	string $emoji_status_custom_emoji_id Custom emoji identifier of the emoji status to set. Pass an empty string to remove the status.
* @param	int $emoji_status_expiration_date Expiration date of the emoji status, if any
*
*
* @property	int $user_id Unique identifier of the target user
* @property	string $emoji_status_custom_emoji_id Custom emoji identifier of the emoji status to set. Pass an empty string to remove the status.
* @property	int $emoji_status_expiration_date Expiration date of the emoji status, if any
*
*/

#[Casts(['bool'])]
class SetUserEmojiStatus extends MethodDefinition implements MethodDefinitionInterface
{

}