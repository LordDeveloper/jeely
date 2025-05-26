<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\Sticker;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetForumTopicIconStickers
* @description Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user. Requires no parameters. Returns an Array of Sticker objects.
*
*
*
*
*
*/

#[Casts(['Jeely\\TLObject\\Types\\Sticker[]'])]
class GetForumTopicIconStickers extends MethodDefinition implements MethodDefinitionInterface
{

}