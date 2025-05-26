<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class DeleteStory
* @description Deletes a story previously posted by the bot on behalf of a managed business account. Requires the can_manage_stories business bot right. Returns True on success.
*
*
* @param	string $business_connection_id Unique identifier of the business connection
* @param	int $story_id Unique identifier of the story to delete
*
*
* @property	string $business_connection_id Unique identifier of the business connection
* @property	int $story_id Unique identifier of the story to delete
*
*/

#[Casts(['bool'])]
class DeleteStory extends MethodDefinition implements MethodDefinitionInterface
{

}