<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\Update;

/**
 * @class GetUpdates
 * @description Use this method to receive incoming updates using long polling (wiki). Returns an Array of Update objects.
 *
 * @property int $offset Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of previously received updates. By default, updates starting with the earliest unconfirmed update are returned. An update is considered confirmed as soon as getUpdates is called with an offset higher than its update_id. The negative offset can be specified to retrieve updates starting from -offset update from the end of the updates queue. All previous updates will forgotten.
 * @property int $limit Limits the number of updates to be retrieved. Values between 1-100 are accepted. Defaults to 100.
 * @property int $timeout Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling. Should be positive, short polling should be used for testing purposes only.
 * @property string[] $allowed_updates A JSON-serialized list of the update types you want your bot to receive. For example, specify [“message”, “edited_channel_post”, “callback_query”] to only receive updates of these types. See Update for a complete list of available update types. Specify an empty list to receive all update types except chat_member (default). If not specified, the previous setting will be used.Please note that this parameter doesn't affect updates created before the call to the getUpdates, so unwanted updates may be received for a short period of time.
 * 
 * @see https://api.telegram.org/bots/api#getupdates
 */
class GetUpdates  extends MethodDefinition implements MethodDefinitionInterface
{
	public string $castsTo = 'Update[]';

	/**
 	* @var string[] $allowed_updates A JSON-serialized list of the update types you want your bot to receive. For example, specify [“message”, “edited_channel_post”, “callback_query”] to only receive updates of these types. See Update for a complete list of available update types. Specify an empty list to receive all update types except chat_member (default). If not specified, the previous setting will be used.Please note that this parameter doesn't affect updates created before the call to the getUpdates, so unwanted updates may be received for a short period of time.
 	*/
	public array $allowed_updates = [];

	/**
 	* @var int $limit Limits the number of updates to be retrieved. Values between 1-100 are accepted. Defaults to 100.
 	*/
	public int $limit = 100;

	/**
 	* @var int $timeout Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling. Should be positive, short polling should be used for testing purposes only.
 	*/
	public int $timeout = 0;

	/**
 	* @var int $offset Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of previously received updates. By default, updates starting with the earliest unconfirmed update are returned. An update is considered confirmed as soon as getUpdates is called with an offset higher than its update_id. The negative offset can be specified to retrieve updates starting from -offset update from the end of the updates queue. All previous updates will forgotten.
 	*/
	public int $offset = 0;

	/**
	 * @var array $vars The value that are taken in the constructor method as method parameters.
	 */
	public function __construct(public array $vars = [])
	{}

	/**
	 * @return Update[]
	 */
	public function __invoke()
	{
		return $this->call();
	}
}