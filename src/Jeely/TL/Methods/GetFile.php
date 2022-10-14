<?php

namespace Jeely\TL\Methods;

use Jeely\TL\Types\File;

/**
 * @class GetFile
 * @description Use this method to get basic information about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a File object is returned. The file can then be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile again.
 *
 * @property string $file_id File identifier to get information about
 * 
 * @see https://api.telegram.org/bots/api#getfile
 */
class GetFile  extends MethodDefinition implements MethodDefinitionInterface
{
	public string $castsTo = 'File';

	/**
 	* @var string $file_id File identifier to get information about
 	*/
	public string $file_id;

	/**
	 * @var array $vars The value that are taken in the constructor method as method parameters.
	 */
	public function __construct(public array $vars = [])
	{}

	/**
	 * @return File
	 */
	public function __invoke()
	{
		return $this->call();
	}
}