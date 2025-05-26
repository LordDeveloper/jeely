<?php
namespace Jeely\TLObject\Methods;

use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class DeleteWebhook
* @description Use this method to remove webhook integration if you decide to switch back to getUpdates. Returns True on success.
*
*
* @param	bool $drop_pending_updates Pass True to drop all pending updates
*
*
* @property	bool $drop_pending_updates Pass True to drop all pending updates
*
*/

#[Casts(['bool'])]
class DeleteWebhook extends MethodDefinition implements MethodDefinitionInterface
{

}