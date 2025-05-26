<?php

namespace Jeely\TLObject\Types;

use Jeely\TLObject;
use Jeely\TLObject\Types\PassportElementErrorDataField;
use Jeely\TLObject\Types\PassportElementErrorFrontSide;
use Jeely\TLObject\Types\PassportElementErrorReverseSide;
use Jeely\TLObject\Types\PassportElementErrorSelfie;
use Jeely\TLObject\Types\PassportElementErrorFile;
use Jeely\TLObject\Types\PassportElementErrorFiles;
use Jeely\TLObject\Types\PassportElementErrorTranslationFile;
use Jeely\TLObject\Types\PassportElementErrorTranslationFiles;
use Jeely\TLObject\Types\PassportElementErrorUnspecified;


/**
* @class PassportElementError
* @description This object represents an error in the Telegram Passport element which was submitted that should be resolved by the user. It should be one of:
*
*/

class PassportElementError extends TLObject
{
	const JSON_PROPERTY_MAP = [
		PassportElementErrorDataField::class,
		PassportElementErrorFrontSide::class,
		PassportElementErrorReverseSide::class,
		PassportElementErrorSelfie::class,
		PassportElementErrorFile::class,
		PassportElementErrorFiles::class,
		PassportElementErrorTranslationFile::class,
		PassportElementErrorTranslationFiles::class,
		PassportElementErrorUnspecified::class,
	];

}