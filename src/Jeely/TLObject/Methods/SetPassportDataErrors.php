<?php
namespace Jeely\TLObject\Methods;

use Jeely\TLObject\Types\PassportElementError;
use Jeely\Extra\Attributes\Casts;
use Jeely\Extra\MethodDefinition;
use Jeely\Contracts\MethodDefinitionInterface;


/**
* @class SetPassportDataErrors
* @description Informs a user that some of the Telegram Passport elements they provided contains errors. The user will not be able to re-submit their Passport to you until the errors are fixed (the contents of the field for which you returned the error must change). Returns True on success.
Use this if the data submitted by the user doesn't satisfy the standards your service requires for any reason. For example, if a birthday date seems invalid, a submitted document is blurry, a scan shows evidence of tampering, etc. Supply some details in the error message to make sure the user knows how to correct the issues.
*
*
* @param	int $user_id User identifier
* @param	PassportElementError[] $errors A JSON-serialized array describing the errors
*
*
* @property	int $user_id User identifier
* @property	PassportElementError[] $errors A JSON-serialized array describing the errors
*
*/

#[Casts(['bool'])]
class SetPassportDataErrors extends MethodDefinition implements MethodDefinitionInterface
{

}