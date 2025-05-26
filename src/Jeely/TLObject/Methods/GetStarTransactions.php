<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\StarTransactions;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetStarTransactions
* @description Returns the bot's Telegram Star transactions in chronological order. On success, returns a StarTransactions object.
*
*
* @param	int $offset Number of transactions to skip in the response
* @param	int $limit The maximum number of transactions to be retrieved. Values between 1-100 are accepted. Defaults to 100.
*
*
* @property	int $offset Number of transactions to skip in the response
* @property	int $limit The maximum number of transactions to be retrieved. Values between 1-100 are accepted. Defaults to 100.
*
*/

#[Casts(['Jeely\\TLObject\\Types\\StarTransactions'])]
class GetStarTransactions extends MethodDefinition implements MethodDefinitionInterface
{

}