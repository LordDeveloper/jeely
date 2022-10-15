<?php

namespace Jeely\TL\Types;

use LazyJsonMapper\LazyJsonMapper;


/**
 * @class PassportElementError
 * @description This object represents an error in the Telegram Passport element which was submitted that should be resolved by the user. It should be one of:
 *
 * @mixin PassportElementErrorDataField
 * @mixin PassportElementErrorFile
 * @mixin PassportElementErrorFiles
 * @mixin PassportElementErrorFrontSide
 * @mixin PassportElementErrorReverseSide
 * @mixin PassportElementErrorSelfie
 * @mixin PassportElementErrorTranslationFile
 * @mixin PassportElementErrorTranslationFiles
 * @mixin PassportElementErrorUnspecified
 *
 * @see https://core.telegram.org/bots/api#passportelementerror
 */
class PassportElementError extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        PassportElementErrorDataField::class,
        PassportElementErrorFile::class,
        PassportElementErrorFiles::class,
        PassportElementErrorFrontSide::class,
        PassportElementErrorReverseSide::class,
        PassportElementErrorSelfie::class,
        PassportElementErrorTranslationFile::class,
        PassportElementErrorTranslationFiles::class,
        PassportElementErrorUnspecified::class,
    ];
}