<?php

namespace Jeely\TL\Types;

use Jeely\LazyUpdates;


/**
 * @class InputFile
 * @description This object represents the contents of a file to be uploaded. Must be posted using multipart/form-data in the usual way that files are uploaded via the browser.
 *
 * @see https://core.telegram.org/bots/api#inputfile
 */
class InputFile extends LazyUpdates
{
    const JSON_PROPERTY_MAP = [
    ];
}