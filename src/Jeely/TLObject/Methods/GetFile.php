<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\File;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class GetFile
* @description Use this method to get basic information about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a File object is returned. The file can then be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile again.
*
*
* @param	string $file_id File identifier to get information about
*
*
* @property	string $file_id File identifier to get information about
*
*/

#[Casts(['Jeely\\TLObject\\Types\\File'])]
class GetFile extends MethodDefinition implements MethodDefinitionInterface
{

}