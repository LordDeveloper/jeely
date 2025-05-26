<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetMyShortDescription
* @description Use this method to change the bot's short description, which is shown on the bot's profile page and is sent together with the link when users share the bot. Returns True on success.
*
*
* @param	string $short_description New short description for the bot; 0-120 characters. Pass an empty string to remove the dedicated short description for the given language.
* @param	string $language_code A two-letter ISO 639-1 language code. If empty, the short description will be applied to all users for whose language there is no dedicated short description.
*
*
* @property	string $short_description New short description for the bot; 0-120 characters. Pass an empty string to remove the dedicated short description for the given language.
* @property	string $language_code A two-letter ISO 639-1 language code. If empty, the short description will be applied to all users for whose language there is no dedicated short description.
*
*/

#[Casts(['bool'])]
class SetMyShortDescription extends MethodDefinition implements MethodDefinitionInterface
{

}