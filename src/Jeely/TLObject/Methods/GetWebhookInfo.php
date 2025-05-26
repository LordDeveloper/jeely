<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\WebhookInfo;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetWebhookInfo
* @description Use this method to get current webhook status. Requires no parameters. On success, returns a WebhookInfo object. If the bot is using getUpdates, will return an object with the url field empty.
*
*
*
*
*
*/

#[Casts(['Jeely\\TLObject\\Types\\WebhookInfo'])]
class GetWebhookInfo extends MethodDefinition implements MethodDefinitionInterface
{

}