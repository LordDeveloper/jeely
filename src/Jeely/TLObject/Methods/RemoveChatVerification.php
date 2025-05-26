<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class RemoveChatVerification
* @description Removes verification from a chat that is currently verified on behalf of the organization represented by the bot. Returns True on success.
*
*
* @param	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
*
*
* @property	int|string $chat_id Unique identifier for the target chat or username of the target channel (in the format @channelusername)
*
*/

#[Casts(['bool'])]
class RemoveChatVerification extends MethodDefinition implements MethodDefinitionInterface
{

}