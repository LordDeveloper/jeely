<?php

namespace Jeely\TL\Methods;


/**
 * @class Close
 * @description Use this method to close the bot instance before moving it from one local server to another. You need to delete the webhook before calling this method to ensure that the bot isn't launched again after server restart. The method will return error 429 in the first 10 minutes after the bot is launched. Returns True on success. Requires no parameters.
 *
 * 
 * @see https://api.telegram.org/bots/api#close
 */
class Close  extends MethodDefinition implements MethodDefinitionInterface
{
	public string $castsTo = 'bool';

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